
<script>
    $(document).ready(function(){
        $(".form-update").submit(function(){
            event.preventDefault();
            let _token = $("input[name='_token'").val()
            let data =  new FormData();
           const inputs = Array.from(this.querySelectorAll(".form-control"));
           inputs.forEach(function(input){
                data.append(input.name,input.value);
           })
          data.append("_token",_token);
          console.log(data);
           $.ajax({
            url : '{{route('admin.variant_catelogue.update',$id)}}',
            type: "POST",
            dataType: "json",
            data : data,
            contentType: false,
            processData: false,
            headers :{
                'X-HTTP-Method-Override':'PUT'
            },
            success : function(res){
          
                toastMessage(res[1],res[0],'{{route('admin.variant_catelogue')}}')
               
            },
            error : function(error){
              let errors =  error.responseJSON.errors;
              Object.keys(errors).forEach(function(error){
                    const input = document.querySelector(`input[name="${error}"]`);
                    const select = document.querySelector(`select[name="${error}"]`)
                    if(input){
                    const message = input.parentElement.querySelector("p");
                        message.innerText = errors[error]

                    }
                    if(select){
                        const message = select.parentElement.querySelector(".message-error");
                        message.innerText = errors[error]
                       
                    }
                })
            }
           })
        })
    })
</script>