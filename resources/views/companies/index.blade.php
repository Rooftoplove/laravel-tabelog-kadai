@extends('layouts.app')
@section('title', 'Home')

@section('content')
@include('components.header')
<a href="{{route('restaurants.index')}}">ホーム</a> > 会社情報
<table>
  <tr>
    <th>会社名</th>
    <th>代表</th>
    <th>住所</th>
    <th>電話番号</th>
    <th>事業内容</th>
  </tr>

  <tr>
    <td>{{ $company->company_name}}</td>
    <td>{{ $company->representative}}</td>
    <td>{{ $company->address}}</td>
    <td>{{ $company->telephone}}</td>
    <td>{{ $company->business}}</td>
  </tr>

</table>