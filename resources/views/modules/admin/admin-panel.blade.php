@extends('/layouts.admin')

    @section('content')
        <div class="container">
            <div uk-grid>
                <div class="uk-card uk-card-default uk-card-hover uk-width-1-2" style="padding-left: 0;">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <span class="uk-icon" uk-icon="icon:user; ratio:1.4"></span>
                                <span style="font-size: 24px;">Gebruikers</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p class="uk-text-center">Aantal gebruikers: {{ count($users) }}</p>
                        <div>
                            {!! $chart->container() !!}
                        </div>
                    </div>
                </div>
                <div class="uk-card uk-card-default uk-card-hover uk-width-1-2" style="padding-left: 0;">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <span class="uk-icon" uk-icon="icon:play; ratio:1.4"></span>
                                <span style="font-size: 24px;">Video's</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p class="uk-text-center">Aantal video's: {{ count($videos) }}</p>
                        <div>
                            {!! $videochart->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection

    @section('scripts')
        {!! $chart->script() !!}
        {!! $videochart->script() !!}
    @endsection
