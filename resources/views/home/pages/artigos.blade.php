@extends('home.inc.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row bg-white aic">
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-left">
                    <h2>Artigos</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-right">
                    <nav aria-label="breadcrumb">
                        <ol class="">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Artigos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area pd-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-blog">
                    <div class="blog-content dfx">
                        <div class="content-blog">
                            <p class="blog-meta"><a href="#">27 Março 2029</a></p>
                            <h3><a href="#">What Can You Do About Illustration Right Now.</a></h3>
                        </div>
                    </div>
                    <img src="assets/home/image/blog/blog-1.png" alt="">
                    <div class="single-post-content">
                        <p>Continually predominate extensive quality vectors with cross-platform potentialities.
                            Professionally productivate real-time process makes to the improvements after user-centric
                            technologies. Enthusiastically.</p>
                        <p>Why I say old chap that is, spiffing jolly good a load of old tosh spend a penny tosser arse
                            over tit, excuse my French owt to do with me up the kyver matie boy at public school. Cuppa
                            argy-bargy young delinquent spend a penny Lucas Bond skive off lurgy, tosser fanny around
                            dropped a clanger quaint I, up the duff a bum bag Eaton what a load of rubbish. Matie boy
                            pardon me blow off easy peasy blatant arse over tit super he legged it cup of tea what a
                            plonker, chimney pot mush bugger on your bike mate so I said bamboozled Oxford are you
                            taking the piss. Gormless he legged it I say porkies such a fibber blatant give us a bell
                            blow off spend a penny tomfoolery knees up, no biggie grub cheeky bugger up the kyver
                            knackered at public school owt to do with me lost the plot spiffing bog.</p>
                        <p>Cras mush pardon you knees up he lost his bottle it’s all gone to pot faff about porkies
                            arse, barney argy-bargy cracking goal loo cheers spend a penny bugger all mate in my flat,
                            hunky-dory well get stuffed mate David morish bender lavatory. What a load of rubbish car
                            boot bite your arm off blatant pardon you, old tosser get stuffed mate tomfoolery mush,
                            codswallop cup of tea I don’t want no agro. Off his nut show off show off pick your nose and
                            blow.!</p>
                        <blockquote>
                            Elizabeth ummm I’m telling bodge spend a penny say wellies say Lucas Bond, bubble and gum.
                        </blockquote>
                        <p>Continually predominate extensive quality vectors with cross-platform potentialities.
                            Professionally productivate real-time process makes to the improvements after user-centric
                            technologies. Enthusiastically.</p>
                        <p>Why I say old chap that is, spiffing jolly good a load of old tosh spend a penny tosser arse
                            over tit, excuse my French owt to do with me up the kyver matie boy at public school. Cuppa
                            argy-bargy young delinquent spend a penny Lucas Bond skive off lurgy,.</p>
                        <div class="post-tag">
                            <strong>Tag:</strong>
                            <a href="#">#Enviroment,</a>
                            <a href="#">#Redesign,</a>
                            <a href="#">#P2P</a>
                        </div>
                        <div class="post-share">
                            <strong>Compartilhar:</strong>
                            <ul>
                                <li><a href="#" data-toggle="tooltip" title="" data-placement="left"
                                        data-original-title="Facebook"><span class="mdi mdi-facebook"></span></a></li>
                                <li><a href="#" data-toggle="tooltip" title="" data-placement="top"
                                        data-original-title="Twitter"><span class="mdi mdi-twitter"></span></a></li>
                                <li><a href="#" data-toggle="tooltip" title="" data-placement="bottom"
                                        data-original-title="Camera"><span class="mdi mdi-camera"></span></a></li>
                                <li><a href="#" data-toggle="tooltip" title="" data-placement="right"
                                        data-original-title="Google"><span class="mdi mdi-google"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="about-author dfx aic">
                    <div class="about-author-img">
                        <img src="{{ asset('assets/home/image/team-1.jpg') }}" alt="">
                    </div>
                    <div class="about-author-text">
                        <h4>Sobre o autor , <span>Lucas</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati doloremque, inventore
                            aliquid quisquam sint laboriosam qui nulla et, temporibus veniam distinctio odio, ex ratione
                            minus. Nulla modi iure repellat placeat.</p>
                    </div>
                </div>
                <div class="comment-list">
                    <h4 class="comment-title">Comentários</h4>
                    <ul class="comments">
                        <li>
                            <div class="comment-author-area dfx">
                                <div class="comment-author-img">
                                    <img src="assets/home/image/team-2.jpg" alt="">
                                </div>
                                <div class="comment-meta">
                                    <h6>Niaz Mahmud <span>20 horas</span></h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque cum reiciendis
                                        consequuntur odio optio, qui facilis eligendi mollitia a aperiam dolores iste
                                        voluptates suscipit vero nostrum maxime at expedita! Pariatur!.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="contact-form post-form">
                        <h4 class="comment-title">Publique seus comentários</h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="mane">Nome</label>
                                        <input id="mane" type="text" class="form-control" placeholder="Seu nome... ">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" id="email" placeholder="E-mail...">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="message">Conteúdo</label>
                                        <textarea class="form-control" id="message" rows="5"
                                            placeholder="Digite seu comentário..."></textarea>
                                    </div>
                                    <button type="submit" class="button">Comentar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="sidebar-widgets">
                    <div class="widgets single-post">
                        <h4>Mais popular</h4>
                        <div class="single-post-area">
                            <div class="post-content">
                                <a href="#"><img src="{{ asset('assets/home/image/blog/popular-1.png') }}" alt=""></a>
                                <a href="#" class="data">27 Março 2029</a>
                                <h5><a href="#">Make a Design Perfect With Illustration.</a></h5>
                            </div>
                        </div>
                        <div class="single-post-area">
                            <div class="post-content">
                                <a href="#"><img src="{{ asset('assets/home/image/blog/popular-2.png') }}" alt=""></a>
                                <a href="#" class="data">27 Março 2029</a>
                                <h5><a href="#">How to Make your Design Pixel Perfect?</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection