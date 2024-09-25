@extends('layouts.default')

<div class="wrapper">
    <div class="welcome">
        @if($language === 'ru')
        <div class="label">Добро пожаловать в</div>
        @else
        <div class="label">Welcome to</div>
        @endif

        <div class="brand">Imhotep</div>
    </div>

    <div class="slogan">
        @if($language === 'ru')
        PHP Framework для Web-разработчиков
        @else
        The PHP Framework For Web Developers
        @endif
    </div>

    <div class="columns-wrap">
        <div class="column full-height">
            @include('blocks/documentation')
        </div>

        <div class="column">
            <div class="blocks-wrap">
                @include('blocks/youtube')
                @include('blocks/github')
                @include('blocks/social')
            </div>
        </div>
    </div>
</div>