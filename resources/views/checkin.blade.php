@extends('layouts.master')

@section('content')
    <header class="app-bar">
        <span class="app-bar__title">Tag Ventures</span>
    </header>
    <main class="main">
        <div class="main-container">
            <h1 class="align-center">Check in</h1>
        <div class="form form--s margin-top">
            <form>
                <div class="form__row">
                    <div class="text-field">
                        <input id="productname" type="text" name="productname" class="text-field__input" placeholder="Enter name product" />
                        <label for="productname" class="text-field__label">Naam *</label>
                    </div>
                </div>
                <div class="form__row">
                    <div class="text-field">
                        <input id="producttag" type="text" name="producttag" class="text-field__input" placeholder="Enter tag product" />
                        <label for="producttag" class="text-field__label">Tag *</label>
                    </div>
                </div>
                <div class="margin-top">
                    <button type="submit" class="button">Submit</button>
                    <a href="#" class="button button--text">Cancel</a>
                </div>
            </form>
        </div>
    </main>
@endsection