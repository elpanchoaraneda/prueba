<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <script>
        $(".formapago").change(function (e) {
            var total = 0, total2 = 0, total3 = 0;
            $('.formapago').each(function(){
                var tipo = $(this).val();
                var id = $(this).attr('data-id');
                var valor = $("#cliente"+id).val();
                 if (tipo == "1")
                  total += parseInt(valor);
                 if (tipo == "2")
                  total2 += parseInt(valor);
                 if (tipo == "3")
                  total3 += parseInt(valor);
            })
            $("#cuenta1").val(total);
            $("#cuenta2").val(total2);
            $("#cuenta3").val(total3);
        });
    </script>
    
</head>
<body>
    


         <table>
    
        <tr>
            <td>
                <input type="text"  id="cliente1" value="100">
            </td>
            <td>
                    <select  data-id="1" class="formapago" name="tipop">
                        <option value="1"  >cuenta uno</option>
                        <option value="2"  >cuenta dos</option>
                        <option value="3"  >pendiente</option>
                    </select>
            </td>
        </tr>
            <tr>
                <td>
                    <input type="text"  id="cliente2" value="50">
                </td>
                <td>
                        <select  data-id="2" class="formapago" name="tipop">
                            <option value="1"  >cuenta uno</option>
                            <option value="2"  >cuenta dos</option>
                            <option value="3"  >pendiente</option>
                        </select>
                </td>
            </tr>
    
            <tr>
                    <td>
                        <input type="text"  id="cliente3" value="100">
                    </td>
                    <td>
                            <select  data-id="3" class="formapago" name="tipop">
                                <option value="1"  >cuenta uno</option>
                                <option value="2"  >cuenta dos</option>
                                <option value="3"  >pendiente</option>
                            </select>
                    </td>
            </tr>
    
            <tr>
                    <td>
                        <input type="text"  id="cliente4" value="30">
                    </td>
                    <td>
                            <select  data-id="4" class="formapago" name="tipop">
                                <option value="1"  >cuenta uno</option>
                                <option value="2"  >cuenta dos</option>
                                <option value="3"  >pendiente</option>
                            </select>
                    </td>
            </tr>
    
    </table>
    
            <table>
                <tr>
                    <td>
                        Total cuenta uno
                        <input type="text" id="cuenta1">
                    </td>
                    <td>
                       Total cuenta Dos
                        <input type="text" id="cuenta2">
                    </td>
                    <td>
                       Total Pendiente
                        <input type="text" id="cuenta3">
                        </td>
                </tr>
            </table>
    estyo muerto
    
</body>
</html>