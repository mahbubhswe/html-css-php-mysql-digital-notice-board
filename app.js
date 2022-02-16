      //login form validation
loginForm.addEventListener('input',()=>{
    if(userName.value.length>0 && password.value.length>0) {
        logBtn.removeAttribute("disabled"); 
    }else{
        logBtn.setAttribute("disabled",true);
    }
})

