<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Balance extends Model
{
    public $timestamps = false;

    public function deposit(float $value, $user): array
    {
        DB::beginTransaction();
        $totalBefore = $this->amount ? $this->amount : 0;
        $this->amount += number_format($value, 2, '.', '');
        $deposit = $this->save();

        $historic = $user->historics()->create([
            'type' => 'I',
            'amount' => $value,
            'total_before' => $totalBefore,
            'total_after' => $this->amount,
            'date' => date('Ymd')
        ]);
        if ($deposit && $historic) {
            DB::commit();
            return [
                'success' => true,
                'message' => 'Deposito enviado com sucesso'
            ];
        } else {
            DB::rollBack();
            return [
                'success' => false,
                'message' => 'Falha ao enviar deposito'
            ];
        }
    }

    public function retirar(float $value, $user): array
    {
        DB::beginTransaction();
        $totalBefore = $this->amount ? $this->amount : 0;
        $this->amount -= number_format($value, 2, '.', '');
        $deposit = $this->save();

        $historic = $user->historics()->create([
            'type' => 'O',
            'amount' => $value,
            'total_before' => $totalBefore,
            'total_after' => $this->amount,
            'date' => date('Ymd')
        ]);
        if ($deposit && $historic) {
            DB::commit();
            return [
                'success' => true,
                'message' => 'Retirada realizada com sucesso'
            ];
        } else {
            DB::rollBack();
            return [
                'success' => false,
                'message' => 'Falha ao realizar retirada'
            ];
        }
    }
}
