<!DOCTYPE html>
<html lang="en">



<body>
    
            <div>
                <h1 class="col-sm-3"> Cerrar sesion:</h1>               
            </div>
            
            <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="bton btn-primary p-2">
                Cerrar sesion
             </button>
            
            
            </form>
            

            
</body>

</html>