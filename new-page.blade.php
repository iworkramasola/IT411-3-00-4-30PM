<html>
    ezz
     <a href="{{route('2nd_page')}}">p2</a>
     <a href="{{route('3rd_page')}}">p3</a> 
     <br>
     @foreach($names as $name)
     <a href = "{{route('shouout',array('text'=>$name))}}">  
         {{$name}}</a> 
         <br>
         @endforeach
</html>