<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>admission form</title>
  <style type="text/css">
      
    </style>
</head>
<body>
  

    <div align="center" style=" margin: auto; font-size: 20px">
     
<<<<<<< HEAD
          <h3 style="text-transform: uppercase;">{{$about_us->School_name}}</h3>
          <h4 >ADMISSION FORM</h4>
           
            <hr>
          @foreach($id as $p)
            @if($p->Image)
            <img style="height: 100px; width: 100px" src="{{ public_path("admin/upload_image/".$p->Image) }}"><br>
            @endif
            
            <table style="text-align: center;" align="center" >
              <tr style="text-align: left;"><td>Student_id :</td><td> {{$p->Student_id}}</td></tr>
              <tr style="text-align: left;"><td>Name :</td><td>{{$p->Name}}</td></tr>
              <tr style="text-align: left;"><td>Nick name :</td><td>{{$p->Nick_name}}</td></tr>
              <tr style="text-align: left;"><td>Class :</td><td>{{$p->Class}}</td></tr>
              
              <tr style="text-align: left;"><td>Session :</td><td>{{$p->Session}}</td></tr>

            
              <tr style="text-align: left;"><td>Psc_grade :</td><td>{{$p->Psc_grade}}</td></tr>
              <tr style="text-align: left;"><td>Jsc_grade :</td><td>{{$p->Jsc_grade}}</td></tr>
              <tr style="text-align: left;"><td>Department :</td><td>{{$p->Department}}</td></tr>
              <tr style="text-align: left;"><td>Birth_date :</td><td>{{$p->Birth_date}}</td></tr>
              <tr style="text-align: left;"><td>Gender :</td><td>{{$p->Gender}}</td></tr>
              <tr style="text-align: left;"><td>Blood_group :</td><td> {{$p->Blood_group}}</td></tr>
              <tr style="text-align: left;"><td>Religion :</td><td> {{$p->Religion}}</td></tr>
              <tr style="text-align: left;"><td>Mobile No :</td><td>{{$p->Mobile_no}}</td></tr>
              <tr style="text-align: left;"><td>Address :</td><td>{{$p->Address}}</td></tr>
              <tr style="text-align: left;"><td>Extra_activities :</td><td>{{$p->Extra_activities}}</td></tr>
              <tr style="text-align: left;"><td>Admission_date :</td><td>{{$p->created_at}}</td></tr><br>
              <tr style="text-align: left;"><td>Fathers_name :</td><td>{{$p->Fathers_name}}</td></tr>
              <tr style="text-align: left;"><td>Fathers_occupation :</td><td> {{$p->Fathers_occupation}}</td></tr>
              <tr style="text-align: left;"><td>Fathers_mobile_no :</td><td> {{$p->Fathers_mobile_no}}</td></tr>
              <tr style="text-align: left;"><td>Mothers_name :</td><td>{{$p->Mothers_name}}</td></tr>
              <tr style="text-align: left;"><td>Mothers_occupation :</td><td>{{$p->Mothers_occupation}}</td></tr>
              <tr style="text-align: left;"><td>Mothers_mobile_no :</td><td>{{$p->Mothers_mobile_no}}</td></tr>
              
               
            </table>
=======
          <h4 style="text-transform: uppercase;">{{$about_us->School_name}}</h4>
          <h4 >ADMISSION FORM</h4>
           @foreach($id as $p)
            <hr>

          <img style="height: 100px; width: 100px" src="{{ public_path("admin/upload_image/".$p->Image) }}"><br><br>
          <table style="text-align: center;" align="center" >
            <tr style="text-align: left;"><td>Student_id :</td><td> {{$p->Student_id}}</td></tr>
            <tr style="text-align: left;"><td>Name :</td><td>{{$p->Name}}</td></tr>
            <tr style="text-align: left;"><td>Class :</td><td>{{$p->Class}}</td></tr>
            <tr style="text-align: left;"><td>Father_name :</td><td>{{$p->Father_name}}</td></tr>
            <tr style="text-align: left;"><td>Mother_name :</td><td>{{$p->Mother_name}}</td></tr>
            <tr style="text-align: left;"><td>Birth_date :</td><td>{{$p->Birth_date}}</td></tr>
            <tr style="text-align: left;"><td>Gender :</td><td>{{$p->Gender}}</td></tr>
            <tr style="text-align: left;"><td>Blood_group :</td><td> {{$p->Blood_group}}</td></tr>
            <tr style="text-align: left;"><td>Mobile No :</td><td>{{$p->Mobile_no}}</td></tr>
            <tr style="text-align: left;"><td>Address :</td><td>{{$p->Address}}</td></tr>
            <tr style="text-align: left;"><td></td><td>{{$p->District}},{{$p->Division}}</td></tr>
            <tr style="text-align: left;"><td>Extra_activities :</td><td>{{$p->Extra_activities}}</td></tr>
            <tr style="text-align: left;"><td>Admission_date :</td><td> {{$p->Admission_date}}</td></tr>
             
          </table>
>>>>>>> ff0675d14c7eb1043c2b4e8148c73b2957f55b9c
        
      @endforeach
    </div>
</body>
</html>
  
