// The footer date 
let date = new Date().getFullYear();
let footer_date = document.querySelector("#footer_date");
footer_date.innerHTML = "&copy " + date;

// Validate the contact form
function formValidation()
{
    // Get the input fields
	let sender_name 	= document.forms["contact_form"]["sender_name"];
	let sender_email 	= document.forms["contact_form"]["sender_email"];
	let msg_body 		= document.forms["contact_form"]["msg_body"];
    let select_value    = document.forms["contact_form"]["msg_cat"];

    // Gather input fields into an array
    let input_fields = [sender_name, sender_email, msg_body, select_value];

    // Get the paragraph error displays tags
    let name_disp = document.querySelector("#name_disp");
    let email_disp = document.querySelector("#email_disp");
    let msg_disp = document.querySelector("#msg_disp");
    let select_dis = document.querySelector("#select_dis");

    let form_errors = [];

    for (var i = 0; i < input_fields.length; i++)
    {
        if (sender_name.value == "")
        {
            sender_name.style.borderColor = "red";
            name_disp.textContent = "Please suppply a name";
            form_errors.push("Invalid name");
        }

        else
        {
            sender_name.style.borderColor = "green";
            name_disp.textContent = "";
        }

        if (sender_email.value == "")                                   
        { 
            sender_email.style.borderColor = "red";
            email_disp.textContent = "Invalid email";  
            form_errors.push("Invalid Email");
        } 

        else
        {
            sender_email.style.borderColor = "green";
            email_disp.textContent = "";
        }
       
        if (sender_email.value.indexOf("@", 0) < 0)                 
        { 
            sender_email.style.borderColor = "red";
            email_disp.textContent = "Invalid email";
            form_errors.push("Invalid Email");
        } 

        else
        {
            sender_email.style.borderColor = "green";
            email_disp.textContent = "";
        }
       
        if (sender_email.value.indexOf(".", 0) < 0)                 
        { 
            sender_email.style.borderColor = "red";
            form_errors.push("Invalid Email"); 
        } 

        else
        {
            sender_email.style.borderColor = "green";
            email_disp.textContent = "";
        }

        if (select_value.value == "")
        {
            select_value.style.borderColor = "red";
            select_dis.textContent = "Please make selection";
            form_errors.push("Invalid selection");
        }
        else
        {
            select_value.style.borderColor = "green";
            select_dis.textContent = "";
        }

        if (msg_body.value == "")
        {
            msg_body.style.borderColor = "red";
            msg_disp.textContent = "Type a message";
            form_errors.push("Invalid Message");
        }
        else
        {
            msg_body.style.borderColor = "green";
            msg_disp.textContent = "";
        }
    }

    if (form_errors.length > 0)
    {
        return false;
    }

    return true;

}

const regex_patterns = 
{
    name : /^$/,
    email: /^$/,
    textarea: /^$/,
}