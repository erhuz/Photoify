(function(){
  if(document.querySelector('.user-profile')){
    const clickableText            = document.querySelector('.user-profile .img-change');
    const innerProfileImgContainer = document.querySelector('.user-profile .profile-img-container .inner-profile-img-container');
    const profileImgForm           = document.querySelector('.user-profile .profile-img-form');
    let   profileImgInput          = document.querySelector('.user-profile #image');
    const profileImg               = document.querySelector('.profile-img-container img');


    clickableText.addEventListener("click", () => openProfileImgForm());
    innerProfileImgContainer.addEventListener("click", () => openProfileImgForm());

    function openProfileImgForm(){
      profileImgInput.click();
    };

    profileImgForm.addEventListener("change", () => {
      if(profileImgInput.files && profileImgInput.files[0]){
        innerProfileImgContainer.setAttribute('style', `background-image: url('${window.URL.createObjectURL(profileImgInput.files[0])}');`)
      }
      console.log(profileImgInput.files[0]);
      console.log('Send request to api');
    });

  }else{
    console.log('Not user profile page.');
  }})();

