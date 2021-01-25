<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>
  @include('dashboard_user');
  <main class="l-main">
    <div class="content-wrapper content-wrapper--with-bg" >
      <h1 class="page-title">Geçmiş Menüler</h1>
  <div style=" float: left;display: inline-block;height: 700px;width: 900px;  margin: 10px;  color: #FFF" >

         @csrf

      <table class="table table-bordered" data-toggle="table" data-height="260" style="height:200px;">
    <thead>
      <tr>

        <th scope="col">Restorant</th>
        <th scope="col">Ana Yemek</th>
        <th scope="col">İçecek</th>
        <th scope="col">Tatlı</th>
        <th scope="col">Tarih</th>
      </tr>
    </thead>
    <tbody >
      @if($count==1){
      @foreach($menus as $menu)
      <tr>
        <td><?php echo $menu->restourant_name ?></td>
        <td><?php echo $menu->maindish ?></td>
        <td><?php echo $menu->drink  ?></td>
        <td><?php echo $menu->dessert ?></td>
        <td><?php echo $menu->created_at ?></td>
      </tr>
      @endforeach
    }
    @else
    <h1 style="color:black;"class="page-title">Kayıtlı menü bulunamadı.</h1>


    @endif

    </tbody>
  </table>

</div>

</div>

</main>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    </div>
</div>

</x-app-layout>
