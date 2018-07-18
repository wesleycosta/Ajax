<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="pai">Pai</label>
                    <select class="form-control" id="pai">
                        <option>1</option>
                        <option>2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="filho">Filho</label>
                    <select class="form-control" id="filho">
                    </select>
                </div>
            </div>
        </div>
    </div>
    
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
        
        $(document).ready(function(){
           carregar($("#pai").val());
        });

        $("#pai").change(function() {
           carregar($(this).val());
        });

        function carregar(value) {
            $.ajax({
                type: "POST",
                url: "requisicao.php",
                data:{id:value},
                success: function(retorno) {
                    var lista = JSON.parse(retorno);
                    $("#filho").html("");
                    $.each(lista, function(index, obj) {
                        $("#filho").append(`<option value=${obj.id}>${obj.name}</option>`);
                    });
                }
            });
        }
    </script>
  </body>
</html>