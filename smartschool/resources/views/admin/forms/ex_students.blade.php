@extends('admin.adminpage')

@section('maincontent')
  
  <h4 id="e">ABOUT SCHOOL</h4><br><br>
  <div style="text-align: center;"><marquee style="width: 10%; background-color: black; color: white;" scrollamount="2" behavior = "alternate">{{Session::get('msg')}}</marquee>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Present Status</th>
        <th>Speech</th>
        <th>Image</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
        $i =0; 
      ?>

      @foreach ($ex_students as $p)
        <tr>
          <td>{{++$i}}</td>
          <td>{{$p->Name}}</td>
          <td>{{$p->Present_status}}</td>
          <td>{{$p->Speech}}</td>
          <td><img style="height: 50px; width: 50px" src="{{URL::asset('admin/upload_image/'.$p->Image)}}"></td>
          <td><a href="{{url('/update_ex_student_form/'.$p->id)}}">UPDATE</a></td>
        </tr>
      @endforeach

    </tbody>
  </table>


@endsection