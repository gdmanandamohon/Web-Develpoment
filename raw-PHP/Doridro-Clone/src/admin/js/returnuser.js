function User(val)
      {
        if(document.getElementById("username").value==="")
        {
          alert("Please enter Usename for login.");
          return false;
        }
        if(document.getElementById("password").value==="")
        {
          alert("Please enter Password for the user.");
          return false;
        }
        document.admin.newUser.value=val;
        document.admin.submit();
        return true;
      }