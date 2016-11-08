@extends('layouts.main')
@section('title', 'Page Title')

@section('content')
    <div class="page">
        <header class="header"><img class="header__bg" src="./assets/img/page__header-back.jpg" alt="">
            <div class="header__wrap">
                <div class="profile">
                    <div class="profile__pic"><img src="./assets/img/user-pic.jpg" alt=""></div>
                    <div class="profile__info">
                        <div class="profile__name">Антон Черепов</div>
                        <div class="profile__about">Я веб разработчик. Мне 24 года. Люблю путешествия, кодинг, фриланс и активный отдых.</div>
                        <ul class="profile__lnks">
                            <li class="profile__lnks-item"><a href="" title="" target="_blank">
                                    <svg class="svg-icon svg-icon_soc_fb" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#soc_fb"></use>
                                    </svg></a></li>
                            <li class="profile__lnks-item"><a href="" title="" target="_blank">
                                    <svg class="svg-icon svg-icon_soc_vk" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#soc_vk"></use>
                                    </svg></a></li>
                            <li class="profile__lnks-item"><a href="" title="" target="_blank">
                                    <svg class="svg-icon svg-icon_soc_google" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#soc_google"></use>
                                    </svg></a></li>
                            <li class="profile__lnks-item"><a href="" title="" target="_blank">
                                    <svg class="svg-icon svg-icon_soc_twitter" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#soc_twitter"></use>
                                    </svg></a></li>
                            <li class="profile__lnks-item"><a href="" title="" target="_blank">
                                    <svg class="svg-icon svg-icon_soc_email" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#soc_email"></use>
                                    </svg></a></li>
                        </ul>
                        <ul class="profile__btns">
                            <li class="profile__btn">
                                <button class="btn btn_with-icon btn_light">
                                    <svg class="svg-icon svg-icon_edit" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#edit"></use>
                                    </svg><span class="btn__text">Редактировать</span>
                                </button>
                            </li>
                            <li class="profile__btn">
                                <button class="btn btn_with-icon btn_light">
                                    <svg class="svg-icon svg-icon_off" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#off"></use>
                                    </svg><span class="btn__text">Выйти</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header__search">
                <div class="search">
                    <div class="search__wrap">
                        <form class="search__form form" action="#" method="post">
                            <label class="form__row">
                                <input class="input-text input-text_with-icon input-text_border_transparent input-text_full-width" type="text" placeholder="Исследовать мир">
                                <svg class="svg-icon svg-icon_search" role="img">
                                    <use xlink:href="./assets/img/sprite.svg#search"></use>
                                </svg>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="main__section">
                <div class="photos main__section-wrap">
                    <div class="title photos__title">Новое в мире</div>
                    <div class="photos__list">
                        <div class="photo photos__item"><a class="photo__pic" href="" title=""><img src="./assets/img/photo.jpg" alr="" title="">
                                <div class="photo__pic-zoom">
                                    <svg class="svg-icon svg-icon_loupe" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#loupe"></use>
                                    </svg>
                                </div></a>
                            <div class="photo__info"><a class="photo__user" href="" title=""><img src="./assets/img/user-pic.jpg" alt="">
                                    <div class="photo__user-zoom">
                                        <svg class="svg-icon svg-icon_more" role="img">
                                            <use xlink:href="./assets/img/sprite.svg#more"></use>
                                        </svg>
                                    </div></a>
                                <div class="photo__info-wrap">
                                    <div class="photo__name">Путешествие на лодке по озеру  на лодке по озеру  на лодке по озеру  на лодке по озеру лодке по озеру  на лодке по озеру  на лодке по озеру</div>
                                    <div class="photo__actions">
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_comments" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#comments"></use>
                                            </svg><span class="photo__action-name">4</span>
                                        </button>
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_like" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#like"></use>
                                            </svg><span class="photo__action-name">32</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="photo__album"> <a class="photo__album-link" href="" title="">
                                    <svg class="svg-icon svg-icon_album" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#album"></use>
                                    </svg><span class="photo__album-title">Прогулки по воде</span></a></div>
                        </div>
                        <div class="photo photos__item"><a class="photo__pic" href="" title=""><img src="./assets/img/photo.jpg" alr="" title="">
                                <div class="photo__pic-zoom">
                                    <svg class="svg-icon svg-icon_loupe" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#loupe"></use>
                                    </svg>
                                </div></a>
                            <div class="photo__info"><a class="photo__user" href="" title=""><img src="./assets/img/user-pic.jpg" alt="">
                                    <div class="photo__user-zoom">
                                        <svg class="svg-icon svg-icon_more" role="img">
                                            <use xlink:href="./assets/img/sprite.svg#more"></use>
                                        </svg>
                                    </div></a>
                                <div class="photo__info-wrap">
                                    <div class="photo__name">Путешествие на лодке по озеру  на лодке по озеру  на лодке по озеру  на лодке по озеру лодке по озеру  на лодке по озеру  на лодке по озеру</div>
                                    <div class="photo__actions">
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_comments" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#comments"></use>
                                            </svg><span class="photo__action-name">4</span>
                                        </button>
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_like" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#like"></use>
                                            </svg><span class="photo__action-name">32</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="photo__album"> <a class="photo__album-link" href="" title="">
                                    <svg class="svg-icon svg-icon_album" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#album"></use>
                                    </svg><span class="photo__album-title">Прогулки по воде</span></a></div>
                        </div>
                        <div class="photo photos__item"><a class="photo__pic" href="" title=""><img src="./assets/img/photo.jpg" alr="" title="">
                                <div class="photo__pic-zoom">
                                    <svg class="svg-icon svg-icon_loupe" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#loupe"></use>
                                    </svg>
                                </div></a>
                            <div class="photo__info"><a class="photo__user" href="" title=""><img src="./assets/img/user-pic.jpg" alt="">
                                    <div class="photo__user-zoom">
                                        <svg class="svg-icon svg-icon_more" role="img">
                                            <use xlink:href="./assets/img/sprite.svg#more"></use>
                                        </svg>
                                    </div></a>
                                <div class="photo__info-wrap">
                                    <div class="photo__name">Путешествие на лодке по озеру  на лодке по озеру  на лодке по озеру  на лодке по озеру лодке по озеру  на лодке по озеру  на лодке по озеру</div>
                                    <div class="photo__actions">
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_comments" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#comments"></use>
                                            </svg><span class="photo__action-name">4</span>
                                        </button>
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_like" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#like"></use>
                                            </svg><span class="photo__action-name">32</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="photo__album"> <a class="photo__album-link" href="" title="">
                                    <svg class="svg-icon svg-icon_album" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#album"></use>
                                    </svg><span class="photo__album-title">Прогулки по воде</span></a></div>
                        </div>
                        <div class="photo photos__item"><a class="photo__pic" href="" title=""><img src="./assets/img/photo.jpg" alr="" title="">
                                <div class="photo__pic-zoom">
                                    <svg class="svg-icon svg-icon_loupe" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#loupe"></use>
                                    </svg>
                                </div></a>
                            <div class="photo__info"><a class="photo__user" href="" title=""><img src="./assets/img/user-pic.jpg" alt="">
                                    <div class="photo__user-zoom">
                                        <svg class="svg-icon svg-icon_more" role="img">
                                            <use xlink:href="./assets/img/sprite.svg#more"></use>
                                        </svg>
                                    </div></a>
                                <div class="photo__info-wrap">
                                    <div class="photo__name">Путешествие на лодке по озеру  на лодке по озеру  на лодке по озеру  на лодке по озеру лодке по озеру  на лодке по озеру  на лодке по озеру</div>
                                    <div class="photo__actions">
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_comments" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#comments"></use>
                                            </svg><span class="photo__action-name">4</span>
                                        </button>
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_like" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#like"></use>
                                            </svg><span class="photo__action-name">32</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="photo__album"> <a class="photo__album-link" href="" title="">
                                    <svg class="svg-icon svg-icon_album" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#album"></use>
                                    </svg><span class="photo__album-title">Прогулки по воде</span></a></div>
                        </div>
                        <div class="photo photos__item"><a class="photo__pic" href="" title=""><img src="./assets/img/photo.jpg" alr="" title="">
                                <div class="photo__pic-zoom">
                                    <svg class="svg-icon svg-icon_loupe" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#loupe"></use>
                                    </svg>
                                </div></a>
                            <div class="photo__info"><a class="photo__user" href="" title=""><img src="./assets/img/user-pic.jpg" alt="">
                                    <div class="photo__user-zoom">
                                        <svg class="svg-icon svg-icon_more" role="img">
                                            <use xlink:href="./assets/img/sprite.svg#more"></use>
                                        </svg>
                                    </div></a>
                                <div class="photo__info-wrap">
                                    <div class="photo__name">Путешествие на лодке по озеру  на лодке по озеру  на лодке по озеру  на лодке по озеру лодке по озеру  на лодке по озеру  на лодке по озеру</div>
                                    <div class="photo__actions">
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_comments" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#comments"></use>
                                            </svg><span class="photo__action-name">4</span>
                                        </button>
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_like" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#like"></use>
                                            </svg><span class="photo__action-name">32</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="photo__album"> <a class="photo__album-link" href="" title="">
                                    <svg class="svg-icon svg-icon_album" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#album"></use>
                                    </svg><span class="photo__album-title">Прогулки по воде</span></a></div>
                        </div>
                        <div class="photo photos__item"><a class="photo__pic" href="" title=""><img src="./assets/img/photo.jpg" alr="" title="">
                                <div class="photo__pic-zoom">
                                    <svg class="svg-icon svg-icon_loupe" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#loupe"></use>
                                    </svg>
                                </div></a>
                            <div class="photo__info"><a class="photo__user" href="" title=""><img src="./assets/img/user-pic.jpg" alt="">
                                    <div class="photo__user-zoom">
                                        <svg class="svg-icon svg-icon_more" role="img">
                                            <use xlink:href="./assets/img/sprite.svg#more"></use>
                                        </svg>
                                    </div></a>
                                <div class="photo__info-wrap">
                                    <div class="photo__name">Путешествие на лодке по озеру  на лодке по озеру  на лодке по озеру  на лодке по озеру лодке по озеру  на лодке по озеру  на лодке по озеру</div>
                                    <div class="photo__actions">
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_comments" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#comments"></use>
                                            </svg><span class="photo__action-name">4</span>
                                        </button>
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_like" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#like"></use>
                                            </svg><span class="photo__action-name">32</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="photo__album"> <a class="photo__album-link" href="" title="">
                                    <svg class="svg-icon svg-icon_album" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#album"></use>
                                    </svg><span class="photo__album-title">Прогулки по воде</span></a></div>
                        </div>
                        <div class="photo photos__item"><a class="photo__pic" href="" title=""><img src="./assets/img/photo.jpg" alr="" title="">
                                <div class="photo__pic-zoom">
                                    <svg class="svg-icon svg-icon_loupe" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#loupe"></use>
                                    </svg>
                                </div></a>
                            <div class="photo__info"><a class="photo__user" href="" title=""><img src="./assets/img/user-pic.jpg" alt="">
                                    <div class="photo__user-zoom">
                                        <svg class="svg-icon svg-icon_more" role="img">
                                            <use xlink:href="./assets/img/sprite.svg#more"></use>
                                        </svg>
                                    </div></a>
                                <div class="photo__info-wrap">
                                    <div class="photo__name">Путешествие на лодке по озеру  на лодке по озеру  на лодке по озеру  на лодке по озеру лодке по озеру  на лодке по озеру  на лодке по озеру</div>
                                    <div class="photo__actions">
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_comments" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#comments"></use>
                                            </svg><span class="photo__action-name">4</span>
                                        </button>
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_like" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#like"></use>
                                            </svg><span class="photo__action-name">32</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="photo__album"> <a class="photo__album-link" href="" title="">
                                    <svg class="svg-icon svg-icon_album" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#album"></use>
                                    </svg><span class="photo__album-title">Прогулки по воде</span></a></div>
                        </div>
                        <div class="photo photos__item"><a class="photo__pic" href="" title=""><img src="./assets/img/photo.jpg" alr="" title="">
                                <div class="photo__pic-zoom">
                                    <svg class="svg-icon svg-icon_loupe" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#loupe"></use>
                                    </svg>
                                </div></a>
                            <div class="photo__info"><a class="photo__user" href="" title=""><img src="./assets/img/user-pic.jpg" alt="">
                                    <div class="photo__user-zoom">
                                        <svg class="svg-icon svg-icon_more" role="img">
                                            <use xlink:href="./assets/img/sprite.svg#more"></use>
                                        </svg>
                                    </div></a>
                                <div class="photo__info-wrap">
                                    <div class="photo__name">Путешествие на лодке по озеру  на лодке по озеру  на лодке по озеру  на лодке по озеру лодке по озеру  на лодке по озеру  на лодке по озеру</div>
                                    <div class="photo__actions">
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_comments" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#comments"></use>
                                            </svg><span class="photo__action-name">4</span>
                                        </button>
                                        <button class="photo__action">
                                            <svg class="svg-icon svg-icon_like" role="img">
                                                <use xlink:href="./assets/img/sprite.svg#like"></use>
                                            </svg><span class="photo__action-name">32</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="photo__album"> <a class="photo__album-link" href="" title="">
                                    <svg class="svg-icon svg-icon_album" role="img">
                                        <use xlink:href="./assets/img/sprite.svg#album"></use>
                                    </svg><span class="photo__album-title">Прогулки по воде</span></a></div>
                        </div>
                    </div>
                    <div class="photos__more">
                        <button class="btn btn_flat btn_bg_transparent">Показать еще</button>
                    </div>
                </div>
            </div>
            <div class="main__section">
                <div class="main__section-wrap">efwef</div>
            </div>
        </main>
        <footer class="footer footer_color_white footer_bg-dark"><img class="footer__bg" src="./assets/img/page__header-back.jpg" alt="">
            <div class="footer__wrap"><a class="footer__top" href="#" title="">
                    <svg class="svg-icon svg-icon_top" role="img">
                        <use xlink:href="./assets/img/sprite.svg#top"></use>
                    </svg></a>
                <div class="footer__about">Перед вами сервис, который поможет вам организовать свои фотографии в альбомы и поделиться ими со всем миром!</div>
                <div class="footer__copyright footer__copyright_color_gray">2016 Создано командой профессионалов на продвинутом курсе по веб-разработке от LoftSchool</div>
            </div>
        </footer>
    </div>
@endsection
