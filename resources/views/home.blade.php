@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="content" id="top">
    <div class="container">
      <div class="row">
        <div class="col col-3 col-6-t col-1-m left-side">
          <ul class="choose-list">
            <p class="bolded orange">Choose one!</p>
            <li class="add-new project-menu"><a href="javascript:;">Add new project</a></li>
            <li class="change project-menu"><a href="javascript:;">Change project</a></li>
            <li class="remove project-menu"><a href="javascript:;">Delete project</a></li>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                <button class="logout-btn" type="submit">Logout</button>
            </form>
          </ul>
        </div>
        <div class="col col-9 col-6-t col-1-m right-side">
          <ul class="breadcrumb">
            <li>Making changes</li>
          </ul>
          <h1 class="orange title">Make changes</h1>
          <div class="col col-12 txt-box">
            <div class="col col-12">
              <div class="form-box">
                <form class="add-form forms" method="POST" action="{{ route('create-project') }}">
                  @csrf
                  <h2>Add new project</h2>
                  <div class="field-box">
                    <label for="title"><b>Title :</b></label>
                    <input type="text" placeholder="Title" name="title" required>
                  </div>
                  <div class="field-box">
                    <label for="slug"><b>Slug :</b></label>
                    <input type="text" placeholder="Slug" name="slug" required>
                  </div>
                  <div class="field-box">
                    <label for="url"><b>Link to GitHub :</b></label>
                    <input type="link" placeholder="URL" name="url" required>
                  </div>
                  <div class="field-box">
                    <label for="content"><b>Content :</b></label>
                    <textarea name="content"></textarea>
                  </div>
                  <button type="submit">Done</button>
                </form>
                <div class="remove-form forms">
                  <h2>Remove existing project</h2>
                  <ul class="project-list">
                    @foreach($projects as $project)
                    <li style="margin: 10px 0 10px 0;">
                      <p style="float: left; width: 350px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $project->title }}</p>
                      <a href="/projects/{{ $project->id }}/delete" class="delete">delete</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <div class="change-form forms">
                  <h2>Change existing project</h2>
                  <ul class="project-list">
                    @foreach($projects as $project)
                      <li class="project-list-item" id="{{ $project->id }}" ><a href="#"> {{ $project->title }}</a></li>
                    @endforeach
                  </ul>
                  @foreach($projects as $project)
                    <form method="GET" action="/projects/{{ $project->id }}/edit" class="change-project" id="project-{{ $project->id }}">
                      <div class="field-box">
                        <label for="title"><b>Title :</b></label>
                        <input type="text" placeholder="Title" name="title" value="{{ $project->title }}" required>
                      </div>
                      <div class="field-box">
                        <label for="slug"><b>Slug :</b></label>
                        <input type="text" placeholder="Slug" name="slug" value="{{ $project->slug }}" required>
                      </div>
                      <div class="field-box">
                        <label for="url"><b>Link to GitHub :</b></label>
                        <input type="link" placeholder="URL" name="url" value="{{ $project->url }}" required>
                      </div>
                      <div class="field-box">
                        <label for="content"><b>Content :</b></label>
                        <textarea name="content">{{ $project->content }}</textarea>
                      </div>
                      <button type="submit">Done</button>
                    </form>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection