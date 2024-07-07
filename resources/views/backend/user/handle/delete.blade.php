<script>
    window.onload = function (){

        const  form = document.querySelectorAll(".form-delete");
        form.forEach(form =>{
            form.addEventListener("submit",handleSubmit);
        })
       function handleSubmit(){
        event.preventDefault();
        const textUrl = this.dataset.url.trim();
        console.log(textUrl);  
        const id = this.querySelector("input[name=user_id]").value;
        const _token = this.querySelector("input[name=_token]").value;
        const url = '{{env('APP_URL')}}'+ "admin/" + textUrl  + "/delete";
        const element = this.parentElement.parentElement;
        const tbodyElement  = element.parentElement;
        console.log(element);
        const data = {
            id,_token
        }
        alertleDelete(data,element,tbodyElement,url);
       }
    }
</script>