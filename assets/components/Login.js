import React , {useState} from 'react';


import './Form.css';
import Axios from 'axios'
import {Link}  from "react-router-dom"; 


function  Login () {

    const url = "http://127.0.0.1:8001/api/login";
  
    const [user,setUser] = useState({
        email : "",
        password : ""
    });
  
    const handleSubmit= event=> {
      event.preventDefault();
      Axios.post(url,{
      email: user.email,
      mdp: user.password
      }).then(res => {
        
        console.log(res.data);
      })
    }
  
    
    const handleEmailChange=(e)=>{
      setUser({...user ,email:e.target.value})
    }
    const handlePasswordChange=(e)=>{
      setUser({...user ,password:e.target.value})
    }
 return (
    <div className='form-container'>
   <div className='form-content-left'>
      
      
      </div>
 
      
    <div className='form-content-right'>
     <form className='form'>
        
        <div className='form-inputs'>
          <label className='form-label'>Email</label>
          <input
          required
            className='form-input'
            type='email'
            name='email'
            placeholder='Enter your email'
            onChange={handleEmailChange}
            
          />
          
        </div>
        <div className='form-inputs'>
          <label className='form-label'>Password</label>
          <input
          required
            className='form-input'
            type='password'
            name='password'
            placeholder='Enter your password'
            onChange={handlePasswordChange}
          
          />
          
        </div>
        
        <button className='form-input-btn' type='submit'>
       Login
        </button>
        
        <span className='form-input-login'>
        don't have an account? <Link to="/"> Sign-up</Link></span>
        </form>
    </div>
  
    </div>
 
    
  );
};

export default Login ;
