<footer class="footer">
    <div class="footer__container">
        <div class="footer__inner">
            <div class="footer__content">
                <div class="footer__copy">
                    <span class="copyright">&copy; 2023 LaBoheme</span>
                </div>

                <div class="footer__social">
                    <ul class="social__icons">

                        <li class="social__icon">
                            <a href="">
                                <i></i>
                            </a>
                        </li>

                        <li class="social__icon">
                            <a href="">
                                    <i></i>
                            </a>
                        </li>

                        <li class="social__icon">
                            <a href="">
                                <i></i>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="footer__scrollUp">
                    <a href="#" class="footer__scroll" id="return-to-top">
                        <i></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer {
        margin-top: 50px;
    }

    .footer__inner{
        border-top: 1px solid #ebebeb;
    }

    .footer__content  .footer__copy .copyright{
        color: #9faabb;
    }

    .footer__scroll{
        color: #8f9bad;
        font-size: 13px;
        border: 1px solid #ebebeb;
        text-decoration: none;
        border-radius: 25px;
        padding: 6px 20px;
        z-index: 4;
        transition: all .3s ease-in-out;
    }

    .footer__scroll i{
        font-size: 11px;
        vertical-align: middle;
        margin-right: 10px;
    }
    .footer__scroll:hover{
        color: blue;
        border-color: blue;
    }
</style>