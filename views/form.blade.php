<html>
    
        <title>Form</title>
        <h1 align="center">Biodata Form</h1>
    
    <body>
            <form method="post" action="{{URL::to('/submit')}}" enctype="multiparth/form-data">

            @csrf
            
                    Name :    <input type="text" name="txt1"/>
                    @error('txt1')
                    <strong style="color:red">{{$message}}</strong>
                    @enderror
                    </br>
                
                    Surname : <input type="text" name="txt2"/>
                    @error('txt2')
                    <strong style="color:red">{{$message}}</strong>
                    @enderror
                    </br>

                    Age : <input type="text" name="age"/>
                    @error('age')
                    <strong style="color:red">{{$message}}</strong>
                    @enderror</br>

                    Birth Date : <input type="text" name="bdate"/>
                    @error('bdate')
                    <strong style="color:red">{{$message}}</strong>
                    @enderror</br>

                    Mobile :  <input type="text" name="txt3"/>
                    @error('txt3')
                    <strong style="color:red">{{$message}}</strong>
                    @enderror
                    </br>
               
                    Email :   <input type="email" name="txt4"/>
                    @error('txt4')
                    <strong style="color:red">{{$message}}</strong>
                    @enderror
                    </br>

                    Password :  <input type="password" name="txt5"/>
                    @error('txt5')
                    <strong style="color:red">{{$message}}</strong>
                    @enderror
                    </br>

                    Confirm Password :  <input type="password" name="txt6"/>
                    @error('txt6')
                    <strong style="color:red">{{$message}}</strong>
                    @enderror
                    </br>
</br>
                         <input type="submit" name="action" value="Submit"/>
            
    </form>
        
    </body>
</html>