<footer>
    <div class="footer">
        <div>
            <ul class="list-inline small">
                <li>{!! Html::link('/about-us', 'About Us') !!}</li> &middot;
                <li>{!! Html::link('/contact', 'Contact Us') !!}</li> &middot;
                <li>{!! Html::link('/feedback', 'Feedback') !!}</li> &middot;
                <li>{!! Html::link('/terms-of-use', 'Terms of Use') !!}</li>
                <li class="pull-right">It's <?php date_default_timezone_set("America/Los_Angeles") ?> {{ date("g:ia") }} (PST) on {{ date("F j, Y") }} | &copy; {{ date("Y")}} Ensemble Travel<sup>&reg;</sup> Group</li>
            </ul>
        </div>
    </div>
</footer>
