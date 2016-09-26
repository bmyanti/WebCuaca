<header>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12" style="padding: 0; overflow: hidden; height: 400px; width: 100%;">
                        <img src="{{ asset('/Pictures/web_images/head3.png') }}" class="img-responsive center-block" alt="Rainbow">
                    </div>
                </div>

            </div>
        </header>

{!! Form::open(array('url' => 'getComboBox', 'class' => 'form-horizontal')) !!}

  <div align="center">
                    
                <h2>SELAMAT DATANG </h2>
                <h1><b>Web Weather</b><br><br><br></h1>
               
                Pilih city pada combo box untuk melihat cuaca
                <br><br>
                </div>
                <div align="center">
            
         <form action="" method="post">   
             <select name="city">  
             <option value="Jakarta">Jakarta</option>  
             <option value="Bandung">Bandung</option>  
             <option value="Medan">Medan</option>  
             </select>   
             <input type="submit" name="enter" value="Go">   
         </form>  
         </div>
 {!! Form::close() !!}