<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <ul class="list-inline text-center">
                <li>
                    <a href="https://twitter.com/PERSONALIZE" data-toggle="tooltip"
                       title="My Twitter Page">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/pages/The-Healthy-Track/959989914052216?fref=ts" data-toggle="tooltip"
                       title="My Facebook Page">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
                    </a>
                </li>

                {{--Hide LinkedIn for now...--}}
                {{--<li>--}}
                    {{--<a href="http://www.linkedin.com/in/PERSONALIZE/" data-toggle="tooltip"--}}
                       {{--title="My LinkedIn Page">--}}
              {{--<span class="fa-stack fa-lg">--}}
                {{--<i class="fa fa-circle fa-stack-2x"></i>--}}
                {{--<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>--}}
              {{--</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

                <li>
                    <a href="https://instagram.com/the_healthy_track/" data-toggle="tooltip"
                       title="My Instagram Page">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
              </span>
                    </a>
                </li>
            </ul>
            @if(!Request::url() == '/')
            <p class="copyright">Copyright &copy; {{ config('blog.author') }}</p>
            @endif
        </div>
    </div>
</div>