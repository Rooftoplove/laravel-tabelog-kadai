@extends('layouts.app')
@section('title', 'Home')

@section('content')
@include('components.header')

<body>
  <div>
    <h1>会社情報</h1>
    <p>会社名：{{ $company->company_name}}</p>
    <p>代表：{{ $company->representative}}</p>
    <p>電話番号：{{ $company->telephone}}</p>
    <p>事業内容：{{ $company->business}}</p>
    <p>住所：{{ $company->address}}</p>
  </div>
</body>