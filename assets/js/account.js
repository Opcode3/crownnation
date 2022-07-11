const regForm = document.querySelector("#regForm");
const loginForm = document.querySelector("#loginForm");
const TIMEOUT = 7000;
const alertBox = document.querySelector("#message_box");

if(regForm){
    regForm.addEventListener( 'submit', function(e){
        e.preventDefault();
        const btnReg = this.querySelector("#btn_register");
        btnReg.innerHTML = "creating account...";
        btnReg.style.cursor = "not-allowed";
        btnReg.disabled = true;
        const new_user_data = {
            full_name: el_value(this,"#full_name"),
            phone_number: el_value(this,"#phone_number"),
            email_address: el_value(this,"#email_address"),
            sex: el_value(this,"#sex"),
            location: el_value(this,"#location"),
            marital_status: el_value(this,"#marital_status"),
            user_password: el_value(this,"#user_password")
        };
        // console.log(new_user_data);
        ( async () => { 
            // console.log(new_user_data);
            const data = await postRequest("http://127.0.0.1:3000/api/user", JSON.stringify(new_user_data));
            btnReg.innerHTML = "Create account";
            btnReg.style.cursor = "pointer";
            btnReg.disabled = false;
            if(typeof data.message == 'object'){
                alertBox.classList.add('alert_success');
                alertBox.innerHTML = "Registration was successful!";
                alertBox.style.display = 'flex';
                console.log(data);
                setTimeout(()=>{
                    window.location.href = '/account'
                }, TIMEOUT - 6000)
            }else{
                alertBox.innerHTML = data.message;
                alertBox.style.display = 'flex';
                setTimeout(()=>{
                    alertBox.innerHTML = '';
                    alertBox.style.display = 'none';

                }, TIMEOUT)
            }
        }
        )();
        
        
        // console.log("Form submitted"+this.querySelector("#name").value);
    })
}

if(loginForm){
    loginForm.addEventListener('submit', function(e){
        e.preventDefault();
        const btnLog = this.querySelector("#btnLog");
        const form_data = {
            username: el_value(this,"#username"),
            password: el_value(this,"#password")
        };

        ( async () => {
            btnLog.innerHTML = "validating credentials...";
            btnLog.style.cursor = "not-allowed";
            btnLog.disabled = true;
            const data = await postRequest("http://127.0.0.1:3000/api/auth", JSON.stringify(form_data));
            if(typeof data.message == 'object'){
                alertBox.classList.add("alert_success");
                alertBox.innerHTML = "Redirecting you to your dashboard...";
                alertBox.style.display = 'flex';
                setTimeout(()=>{ window.location.href = "/user" }, TIMEOUT - 6000);
            }else{
                alertBox.innerHTML = data.message;
                btnLog.innerHTML = "Log in";
                btnLog.style.cursor = "pointer";
                btnLog.disabled = false;
                alertBox.style.display = 'flex';

                setTimeout(()=>{
                    alertBox.innerHTML = '';
                    alertBox.style.display = 'none';
                 }, TIMEOUT);
            }
        })();

    })
}


const el_value = (parent, pointer) => parent.querySelector(pointer).value;

async function postRequest(url, request_data = [], headers = {'Content-Type': 'application/json'}){
    try {
        const response = await fetch(url, {method: 'POST', headers: headers, body: request_data});
        return await response.json();
    } catch (error) {
        console.error("Unable to connect to server")
        return { message: 'unable to connect to server.'}
    }
}