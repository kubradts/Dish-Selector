<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>
  @include('dashboard_user');
  <main class="l-main">
    <div class="content-wrapper content-wrapper--with-bg" >
      <h1 class="page-title">Kişi Listesi</h1>
  <div style=" float: left;display: inline-block;height: 500px;width: 600px;  margin: 10px;  color: #FFF" >
      <form method="post"  action="{{route('indexpost')}}">
         @csrf
      <button type="submit"  class="btn btn-info"  style="width:100%;">Menu Oluştur</button>
      <table class="table table-bordered" data-toggle="table" data-height="260" style="height:200px;">
    <thead>
      <tr>
       <th data-checkbox="true"></th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    <tbody >
      @foreach($users as $user)
      <tr>
       <th><input type="checkbox" name="fruits[]" value="{{ $user->id }} "></th>
        <td>{{ $user->name }}</td>

      </tr>
      @endforeach
    </tbody>
  </table>
  </form>
    </div>
    @if($menu['name']!=="")
@include('modaldialog')
@endif
    </div>

  </main>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        </div>
    </div>

</x-app-layout>
