@extends('inc.app')

@section('content')
  <h1>Homepage</h1>
  @include('components.subcontent', ['title' => 'Việt Nam'])
  @include('components.subcontent', ['title' => 'Hàn Quốc'])
  @include('components.subcontent', ['title' => 'Âu Mỹ'])
  @include('components.subcontent', ['title' => 'Hoa Ngữ'])
  @include('components.subcontent', ['title' => 'Hòa tấu'])
@endsection