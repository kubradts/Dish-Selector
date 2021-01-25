  <div style=" float: left;display: inline-block;height: 500px;width: 600px;  margin: 10px; " >


<ul class="list-group" >
  <li class="list-group-item disabled">Menu</li>
  <li class="list-group-item"><?php echo $menu['name'] ?></li>
  <li class="list-group-item"><?php echo $menu['maindish']?></li>
  <li class="list-group-item"><?php echo $menu['drink']?></li>
  <li class="list-group-item"><?php echo $menu['dessert']?></li>

</ul>
<?php
 $menu['person']=$person;
 ?>
<a href="{{ route('insertmenu',  $menu) }}" class="btn btn-default"><button type="submit"  class="btn btn-info"   style="width:100%;">Kaydet</button></a>
<a href="{{ route('menu') }}" class="btn btn-default"><button type="submit"  class="btn btn-info"   style="width:100%;">iptal</button></a>

</form>
</div>
