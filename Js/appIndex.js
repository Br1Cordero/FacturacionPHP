$(document).ready(function () {
    
    $('#form').submit(function(e){
        e.preventDefault();
        const postData = {
        user: $('#user').val(),  
        pass:  $('#pass').val(),    
        };
        
        let url = '../backend/login.php'; 
        $.post( url , postData, function(response) {
  
            if(response == 'Credenciales incorrectas '){
                alert(response);
            }else {
                let user = JSON.parse(response);
                user.forEach(users =>{
                    
                    if(users.perfil == 'Admin'){
                                         window.location.replace ("./factura.html");
                    }
                
                    
                })
            }
            
        $('#form').trigger('reset');
    })
}  
)
})