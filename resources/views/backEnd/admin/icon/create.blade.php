@extends('backLayout.app')
@section('title')
Create new Icon
@stop
@section('css')
    <style>
            /* Optional Wrapper to help with Responsive Designs */
    .select2-wrapper {
        width: 300px;
    }
    /* Optional styling to the right */
    .select2-results .fa {
        float: right;
        position: relative;
        line-height: 20px;
    }
    </style>
@endsection

@section('content')

    <h1>Create New Icon</h1>
    <hr/>

    {!! Form::open(['route' => 'icon.store', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lien') ? 'has-error' : ''}}">
                {!! Form::label('lien', 'Lien: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('lien', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lien', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('faicon') ? 'has-error' : ''}}">
                {!! Form::label('faicon', 'Faicon: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                        <select name="faicon" class="form-control" required>
                            <option value="fa-bitbucket" data-icon="fa-bitbucket">Bitbucket</option>
                            <option value="fa-bitbucket-square" data-icon="fa-bitbucket-square">Bitbucket Square</option>
                            <option value="fa-bitcoin" data-icon="fa-bitcoin">Bitcoin</option>
                            <option value="fa-dribbble" data-icon="fa-dribbble">Dribbble</option>
                            <option value="fa-facebook" data-icon="fa-facebook">Facebook</option>
                            <option value="fa-facebook-square" data-icon="fa-facebook-square">Facebook Square</option>
                            <option value="fa-flickr" data-icon="fa-flickr">Flickr</option>
                            <option value="fa-foursquare" data-icon="fa-foursquare">Foursquare</option>
                            <option value="fa-github" data-icon="fa-github">Github</option>
                            <option value="fa-github-alt" data-icon="fa-github-alt">Github Alt</option>
                            <option value="fa-github-square" data-icon="fa-github-square">Github Square</option>
                            <option value="fa-gittip" data-icon="fa-gittip">Gittip</option>
                            <option value="fa-google-plus" data-icon="fa-google-plus">Google Plus</option>
                            <option value="fa-google-plus-square" data-icon="fa-google-plus-square">Google Plus Square</option>
                            <option value="fa-instagram" data-icon="fa-instagram">Instagram</option>
                            <option value="fa-linkedin" data-icon="fa-linkedin">Linkedin</option>
                            <option value="fa-linkedin-square" data-icon="fa-linkedin-square">Linkedin Square</option>
                            <option value="fa-maxcdn" data-icon="fa-maxcdn">Maxcdn</option>
                            <option value="fa-pinterest" data-icon="fa-pinterest">Pinterest</option>
                            <option value="fa-pinterest-square" data-icon="fa-pinterest-square">Pinterest Square</option>
                            <option value="fa-skype" data-icon="fa-skype">Skype</option>
                            <option value="fa-stack-exchange" data-icon="fa-stack-exchange">Stack Exchange</option>
                            <option value="fa-stack-overflow" data-icon="fa-stack-overflow">Stack Overflow</option>
                            <option value="fa-trello" data-icon="fa-trello">Trello</option>
                            <option value="fa-tumblr" data-icon="fa-tumblr">Tumblr</option>
                            <option value="fa-tumblr-square" data-icon="fa-tumblr-square">Tumblr Square</option>
                            <option value="fa-twitter" data-icon="fa-twitter">Twitter</option>
                            <option value="fa-twitter-square" data-icon="fa-twitter-square">Twitter Square</option>
                            <option value="fa-vimeo-square" data-icon="fa-vimeo-square">Vimeo Square</option>
                            <option value="fa-vk" data-icon="fa-vk">Vk</option>
                            <option value="fa-weibo" data-icon="fa-weibo">Weibo</option>
                            <option value="fa-windows" data-icon="fa-windows">Windows</option>
                            <option value="fa-xing" data-icon="fa-xing">Xing</option>
                            <option value="fa-xing-square" data-icon="fa-xing-square">Xing Square</option>
                            <option value="fa-youtube" data-icon="fa-youtube">Youtube</option>
                            <option value="fa-youtube-play" data-icon="fa-youtube-play">Youtube Play</option>
                            <option value="fa-youtube-square" data-icon="fa-youtube-square">Youtube Square</option>
                        </select>
                    {!! $errors->first('faicon', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
@section('javascript')
    <script>
            function format(icon) {
                var originalOption = icon.element;
                return '<i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text;
            }
            $('.wpmse_select2').select2({
                width: "100%",
                formatResult: format
            });
    </script>
@endsection