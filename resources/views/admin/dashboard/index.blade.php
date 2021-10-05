@extends('admin.template')


@section('titulo', 'Dashboard')
@section('subtitulo', 'Conteúdos Cadastrados')

@section('conteudo')

                <div class="row">

                    {{-- DASHBOARD --}}
                    <div class="col-xl-4 col-md-12">
                        <h6>Geral</h6>
                        <div class="card mat-stat-card">
                            <div class="card-block">
                                <div class="row align-items-center b-b-default">
                                    {{-- USUARIOS --}}
                                    <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                        <div class="row align-items-center text-center">
                                            <div class="col-4 p-r-0">
                                                <i class="far fa-user text-c-purple f-24"></i>
                                            </div>
                                            <div class="col-8 p-l-0">
                                                <h5>{{$usuarios}}</h5>
                                                <p class="text-muted m-b-0">Usuários</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- ALUNOS --}}
                                    <div class="col-sm-6 p-b-20 p-t-20 r-default">
                                        <div class="row align-items-center text-center">
                                            <div class="col-4 p-r-0">
                                                <i class="fas fa-users text-c-green f-24"></i>
                                            </div>
                                            <div class="col-8 p-l-0">
                                                <h5>{{$alunos}}</h5>
                                                <p class="text-muted m-b-0">Alunos</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    {{-- TREINOS --}}
                                    <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                        <div class="row align-items-center text-center">
                                            <div class="col-4 p-r-0">
                                                <i class="fas fa-bolt text-c-red f-24"></i>
                                            </div>
                                            <div class="col-8 p-l-0">
                                                <h5>{{$treinos}}</h5>
                                                <p class="text-muted m-b-0">Treinos</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- ANAMNESE --}}
                                    <div class="col-sm-6 p-b-20 p-t-20 r-default">
                                        <div class="row align-items-center text-center">
                                            <div class="col-4 p-r-0">
                                                <i class="fas fa-file-alt text-c-blue f-24"></i>
                                            </div>
                                            <div class="col-8 p-l-0">
                                                <h5>{{$anamneses}}</h5>
                                                <p class="text-muted m-b-0">Anamneses</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                 
                </div>

@endsection