@extends('layouts.main')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3">The World of Automation</h1>
        <p class="lead">Everything about development automation</p>
        <p class="lead">All top automation tools will be discussed,</p>
        <p class="lead">Including but not limited to Git, Linux, Maven, Jenkins, Docker ...</p>
        <hr class="my-2">


    </div>

    <div class="card-columns mt-2">
        <div class="card">
            @include('partials.logo')
            <div class="card-header">
                <div class="w3-hover-teal" id="git">
                    <h3>GIT (SCM)</h3>
                </div>
            </div>
            <div class="card-body">
                <blockquote class=" blockquote">
                    <h4 class="card-title">What is Git</h4>
                    <p class="card-text">Git is a distributed version control system that is used
                        to track changes to files and coordinate work on
                        those files among multiple developers.
                        <a href="">read more</a>
                    </p>
                </blockquote>
            </div>
        </div>
        <div class="card">
            @include('partials.logo')
            <div class="card-header">
                <div class="w3-hover-teal" id="maven">
                    <h3>MAVEN</h3>
                </div>
            </div>
            <div class="card-body">
                <blockquote class=" blockquote">
                    <h4 class="card-title">What is Maven</h4>
                    <p class="card-text">
                        Maven is a build automation tool used primarily for Java projects.
                        Maven can also be used to build and manage projects written
                        in C#, Ruby, Scala, and other languages.
                        <a href="">read more</a>
                    </p>
                </blockquote>
            </div>
        </div>
        <div class="card">
            @include('partials.logo')
                <div class="card-header">
                    <div id="jenkins" class=" w3-hover-teal">
                        <h3>JENKINS</h3>
                    </div>
                </div>

            <div class="card-body">
                <blockquote class="blockquote">
                    <h4 class="card-title">What is Jenkins</h4>
                    <p class="card-text">
                        Jenkins is an open-source automation server
                        used to automate tasks related to building, testing, and deployment
                         of software application.
                         <a href="">read more</a>
                    </p>
                </blockquote>
            </div>
        </div>
    </div>
@endsection
