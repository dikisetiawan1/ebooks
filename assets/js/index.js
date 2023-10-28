// detail-course page
           
           var optionCourse = document.querySelector("#option");
            var videos = document.querySelector("#videoCourse");
            var textScript = document.querySelector("#textscriptCourse");
            var btn = document.querySelector("#ubah");

            let text = "";

            btn.addEventListener("click", function() {
                let text = "";

                if (optionCourse.value == "textscript") {
                    text += textScript.style.visibility = 'visible';
                } else {
                    text += textScript.style.visibility = 'hidden';
                }
                if (optionCourse.value == "video") {
                    text += videos.style.visibility = 'visible';
                }
                sectionOption.innerHTML = text;
            })
    //end  detail-course page