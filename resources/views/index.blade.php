<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ZOHAIB'S PORTFOLIO</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="D:/UET Taxila/3rd Semester Data/CAED/MAAZ PORTFOLIO WEBSITE/img/mz.png">
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
}

:root {
  --color-primary: #37474F;
  --color-secondary: #DDE4E7;
  --color-white: #FFFFFF;
  --color-black: #222222;
  --color-grey0: #F8F8F8;
  --color-grey-1: #DBE1E8;
  --color-grey-2: #B2BECD;
  --color-grey-3: #6C7983;
  --color-grey-4: #454E56;
  --color-grey-5: #2A2E35;
  --color-grey-6: #12181B;
  --br-sm-2: 14px;
  --box-shadow-1: 0 3px 15px rgba(0, 0, 0, .3);
}

.light-mode {
  --color-primary: #DDE4E7;
  --color-secondary: #37474F; /* Assuming you want to keep this color as it is not provided */
  --color-white: #454E56;
  --color-black: #222222;
  --color-grey0: #F8F8F8;
  --color-grey-1: #6C7983;
  --color-grey-2: #6C7983;
  --color-grey-3: #6C7983;
  --color-grey-4: #454E56;
  --color-grey-5: #F8F8F8;
  --color-grey-6: #12181B;
}


body {
  background-color: var(--color-primary);
  font-family: "Poppins", sans-serif;
  font-size: 1.1rem;
  color: var(--color-white);
  transition: all 0.4s ease-in-out;
}

a {
  display: inline-block;
  text-decoration: none;
  color: inherit;
  font-family: inherit;
}

header {
  min-height: 100vh;
  color: var(--color-white);
  overflow: hidden;
  padding: 0 !important;
}

section {
  min-height: 100vh;
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
  padding: 3rem 18rem;
}

.container {
  display: none;
  transform: translateY(-100%) scale(0);
  transition: all 0.4s ease-in-out;
  background-color: var(--color-primary);
}

.active {
  display: block;
  animation: appear 1s ease-in-out;
  transform: translateY(0) scaleY(1);
}
@keyframes appear {
  0% {
    transform: translateY(-100%) scaleY(0);
  }
  100% {
    transform: translateY(0) scaleY(1);
  }
}

.controls {
  position: fixed;
  z-index: 10;
  top: 50%;
  right: 3%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  transform: translateY(-50%);
}

.controls .control {
  padding: 1rem;
  cursor: pointer;
  background-color: var(--color-grey-3);
  width: 55px;
  height: 55px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0.7rem 0;
  box-shadow: var(--box-shadow-1);
}

.controls .control i {
  font-size: 1.2rem;
  color: var(--color-grey-0);
  pointer-events: none;
}

.controls .active-btn {
  background-color: var(--color-primary);
  transition: all 0.4s ease-in-out;
}

.controls .active-btn i {
  background-color: var(--color-primary);
  transition: all 0.4s ease-in-out;
}

.theme-btn {
  top: 5%;
  right: 3%;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background-color: var(--color-grey-4);
  cursor: pointer;
  position: fixed;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 3px 15px rgba(0, 0, 0, 0.3);
  transition: all 0.1s ease-in-out;
}
.theme-btn:active {
  transform: translateY(-3px);
}
.theme-btn i {
  font-size: 1.4rem;
  color: var(--color-grey-2);
  pointer-events: none;
}

/*Header-content*/
.header-content {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  min-height: 100vh;
}
.header-content .left-header {
  display: flex;
  align-items: center;
  position: relative;
}
.header-content .left-header .h-shape {
  transition: all 0.4s ease-in-out;
  width: 65%;
  height: 100%;
  background-color: var(--color-secondary);
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
  clip-path: polygon(0 0, 46% 0, 79% 100%, 0% 100%);
}
.header-content .left-header .image {
  border-radius: var(--br-sm-2);
  height: 90%;
  width: 68%;
  margin-left: 4rem;
  background-color: var(--color-black);
  transition: all 0.4s ease-in-out;
}
.header-content .left-header .image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: all 0.4s ease-in-out;
  filter: grayscale(100%);
}
.header-content .left-header .image img:hover {
  filter: grayscale(0);
}
.header-content .right-header {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-right: 18rem;
}
.header-content .right-header .name {
  font-size: 3rem;
}
.header-content .right-header .name span {
  color: var(--color-secondary);
}
.header-content .right-header p {
  margin: 1.5rem 0;
  line-height: 2rem;
}

/*About*/
.about-container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  padding-top: 3.5rem;
  padding-bottom: 5rem;
}
.about-container .right-about {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 2rem;
}
.about-container .right-about .about-item {
  border: 1px solid var(--color-grey-5);
  border-radius: 5px;
  transition: all 0.4s ease-in-out;
  box-shadow: 1px 2px 15px rgba(0, 0, 0, 0.1);
}
.about-container .right-about .about-item:hover {
  cursor: default;
  transform: translateY(-5px);
  border: 1px solid var(--color-secondary);
  box-shadow: 1px 4px 15px rgba(0, 0, 0, 0.32);
}
.about-container .right-about .about-item .abt-text {
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
}
.about-container .right-about .about-item .abt-text .large-text {
  font-size: 3rem;
  font-weight: 700;
  color: var(--color-secondary);
}
.about-container .right-about .about-item .abt-text .small-text {
  padding-left: 3rem;
  position: relative;
  text-transform: uppercase;
  font-size: 1.2rem;
  color: var(--color-grey-1);
  letter-spacing: 2px;
}
.about-container .right-about .about-item .abt-text .small-text::before {
  content: "";
  position: absolute;
  left: 0;
  top: 15px;
  width: 2rem;
  height: 2px;
  background-color: var(--color-grey-5);
}
.about-container .left-about {
  padding-right: 5rem;
}
.about-container .left-about p {
  line-height: 2rem;
  padding: 1rem;
  color: var(--color-grey-1);
}
.about-container .left-about h4 {
  font-size: 2rem;
  text-transform: uppercase;
}

.about-stats {
  padding-bottom: 4rem;
}
.about-stats .progress-bars {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 2rem;
}
.about-stats .progress-bars .progress-bar {
  display: flex;
  flex-direction: column;
}
.about-stats .progress-bars .progress-bar .prog-title {
  text-transform: uppercase;
  font-weight: 500;
}
.about-stats .progress-bars .progress-bar .progress-con {
  display: flex;
  align-items: center;
}
.about-stats .progress-bars .progress-bar .progress-con .prog-text {
  color: var(--color-grey-2);
}
.about-stats .progress-bars .progress-bar .progress-con .progress {
  width: 100%;
  height: 0.45rem;
  background-color: var(--color-grey-4);
  margin-left: 1rem;
  position: relative;
}
.about-stats .progress-bars .progress-bar .progress-con .progress span {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background-color: var(--color-secondary);
  transition: all 0.4s ease-in-out;
  width: 60%;
}
.about-stats .progress-bars .progress-bar .progress-con .progress .html {
  width: 80%;
}
.about-stats .progress-bars .progress-bar .progress-con .progress .css {
  width: 95%;
}
.about-stats .progress-bars .progress-bar .progress-con .progress .js {
  width: 75%;
}
.about-stats .progress-bars .progress-bar .progress-con .progress .react {
  width: 60%;
}
.about-stats .progress-bars .progress-bar .progress-con .progress .node {
  width: 87%;
}
.about-stats .progress-bars .progress-bar .progress-con .progress .python {
  width: 70%;
}

.stat-title {
  text-transform: uppercase;
  font-size: 1.4rem;
  text-align: center;
  padding: 3.5rem 0;
  position: relative;
}
.stat-title::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 0;
  width: 40%;
  height: 1px;
  background-color: var(--color-grey-5);
  transform: translateX(-50%);
}

/*Timeline*/
.timeline {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 2rem;
  padding-bottom: 3rem;
}
.timeline .timeline-item {
  position: relative;
  padding-left: 3rem;
  border-left: 1px solid var(--color-grey-5);
}
.timeline .timeline-item .tl-icon {
  position: absolute;
  left: -27px;
  top: 0;
  background-color: var(--color-grey-6);
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.timeline .timeline-item .tl-icon i {
  font-size: 1.3rem;
}
.timeline .timeline-item .tl-duration {
  padding: 0.2rem 0.6rem;
  background-color: var(--color-grey-5);
  border-radius: 15px;
  display: inline-block;
  font-size: 0.8rem;
  text-transform: uppercase;
  font-weight: 500;
}
.timeline .timeline-item h5 {
  padding: 1rem 0;
  text-transform: uppercase;
  font-size: 1.3rem;
  font-weight: 600;
}
.timeline .timeline-item h5 span {
  color: var(--color-grey-2);
  font-weight: 500;
  font-size: 1.2rem;
}
.timeline .timeline-item p {
  color: var(--color-grey-2);
}

.port-text {
  padding: 2rem 0;
  text-align: center;
}

.portfolios {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 2rem;
  margin-top: 3rem;
}
.portfolios .portfolio-item {
  position: relative;
  border-radius: 15px;
}
.portfolios .portfolio-item img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  border-radius: 15px;
}
.portfolios .portfolio-item .hover-items {
  width: 100%;
  height: 100%;
  background-color: var(--color-secondary);
  position: absolute;
  left: 0;
  top: 0;
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  opacity: 0;
  transform: scale(0);
  transition: all 0.4s ease-in-out;
}
.portfolios .portfolio-item .hover-items h3 {
  font-size: 1.5rem;
  color: var(--color-white);
  margin-bottom: 1.5rem;
}
.portfolios .portfolio-item .hover-items .icons {
  display: flex;
  justify-content: center;
  align-items: center;
}
.portfolios .portfolio-item .hover-items .icons .icon {
  background-color: var(--color-primary);
  border-radius: 50%;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 1rem;
  cursor: pointer;
  transition: all 0.4s ease-in-out;
}
.portfolios .portfolio-item .hover-items .icons .icon i {
  font-size: 1.5rem;
  color: var(--color-white);
  margin: 0 1rem;
}
.portfolios .portfolio-item .hover-items .icons .icon:hover {
  background-color: var(--color-white);
}
.portfolios .portfolio-item .hover-items .icons .icon:hover i {
  color: var(--color-primary);
}

.portfolio-item:hover .hover-items {
  opacity: 1;
  transform: scale(1);
}

.blogs {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 2rem;
  margin-top: 3rem;
}
.blogs .blog {
  position: relative;
  background-color: var(--color-grey-5);
  border-radius: 5px;
  box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease-in-out;
}
.blogs .blog:hover {
  box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.3);
  transform: translateY(-5px);
  transition: all 0.4s ease-in-out;
}
.blogs .blog:hover img {
  filter: grayscale(0);
  transform: scale(1.1);
  box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.8);
}
.blogs .blog img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  filter: grayscale(100%);
  transition: all 0.4s ease-in-out;
}
.blogs .blog .blog-text {
  margin-top: -7px;
  padding: 1.1rem;
  border-top: 8px solid var(--color-secondary);
}
.blogs .blog .blog-text h4 {
  font-size: 1.5rem;
  margin-bottom: 0.7rem;
  transition: all 0.4s ease-in-out;
  cursor: pointer;
}
.blogs .blog .blog-text h4:hover {
  color: var(--color-secondary);
}
.blogs .blog .blog-text p {
  color: var(--color-grey-2);
  line-height: 2rem;
  padding-bottom: 1rem;
}

.contact-content-con {
  display: flex;
  padding-top: 3.5rem;
}
.contact-content-con .left-contact {
  flex: 2;
}
.contact-content-con .left-contact h4 {
  margin-top: 1rem;
  font-size: 2rem;
  text-transform: uppercase;
}
.contact-content-con .left-contact p {
  margin: 1rem 0;
  line-height: 2rem;
}
.contact-content-con .left-contact .contact-info .contact-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.contact-content-con .left-contact .contact-info .contact-item p {
  margin: 0.3rem 0 !important;
  padding: 0 !important;
}
.contact-content-con .left-contact .contact-info .contact-item .icon {
  display: grid;
  grid-template-columns: 40px 1fr;
}
.contact-content-con .left-contact .contact-info .contact-item .icon i {
  display: flex;
  align-items: center;
  font-size: 1.3rem;
}
.contact-content-con .left-contact .contact-icon {
  display: flex;
  margin-top: 2rem;
}
.contact-content-con .left-contact .contact-icon a {
  display: flex;
  align-items: center;
  color: var(--color-grey0);
  background-color: var(--color-grey-4);
  cursor: pointer;
  justify-content: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin: 0 0.4rem;
  transition: all 0.4s ease-in-out;
}
.contact-content-con .left-contact .contact-icon a:hover {
  background-color: var(--color-grey-6);
}
.contact-content-con .left-contact .contact-icon a:hover i {
  color: var(--color-grey0);
}
.contact-content-con .left-contact .contact-icon a i {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.3rem;
}
.contact-content-con .right-contact {
  flex: 3;
  margin-left: 3rem;
}
.contact-content-con .right-contact .input-control {
  margin: 1.5rem 0;
}
.contact-content-con .right-contact .input-control input, .contact-content-con .right-contact .input-control textarea {
  border-radius: 30px;
  font-weight: inherit;
  font-size: inherit;
  font-family: inherit;
  padding: 0.8rem 1.1rem;
  outline: none;
  border: none;
  background-color: var(--color-grey-5);
  width: 100%;
  color: var(--color-white);
  resize: none;
}
.contact-content-con .right-contact .i-c-2 {
  display: flex;
}
.contact-content-con .right-contact .i-c-2 :last-child {
  margin-left: 1.5rem;
}
.contact-content-con .right-contact .submit-btn {
  display: flex;
  justify-content: flex-start;
}

/*Independed components*/
.btn-con {
  display: flex;
  align-self: flex-start;
}

.main-btn {
  border-radius: 30px;
  color: inherit;
  font-weight: 600;
  position: relative;
  border: 1px solid var(--color-secondary);
  display: flex;
  align-self: flex-start;
  align-items: center;
  overflow: hidden;
}
.main-btn .btn-text {
  padding: 0 2rem;
}
.main-btn .btn-icon {
  background-color: var(--color-secondary);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  padding: 1rem;
}
.main-btn::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  transform: translateX(100%);
  transition: all 0.4s ease-out;
  z-index: -1;
}
.main-btn:hover {
  transition: all 0.4s ease-out;
}
.main-btn:hover::before {
  width: 100%;
  height: 100%;
  background-color: var(--color-secondary);
  transform: translateX(0);
  transition: all 0.4s ease-out;
}

.main-title {
  text-align: center;
}
.main-title h2 {
  position: relative;
  text-transform: uppercase;
  font-size: 4rem;
  font-weight: 700;
}
.main-title h2 span {
  color: var(--color-secondary);
}
.main-title h2 .bg-text {
  position: absolute;
  top: 50%;
  left: 50%;
  color: var(--color-grey-5);
  transition: all 0.4s ease-in-out;
  z-index: -1;
  transform: translate(-50%, -50%);
  font-weight: 800;
  font-size: 6.3rem;
}

.about-container .left-about p {
  padding-left: 0;
}

@media screen and (max-width: 600px) {
  header {
    padding: 0 !important;
  }

  .theme-btn {
    width: 50px;
    height: 50px;
  }

  .header-content {
    grid-template-columns: repeat(1, 1fr);
    padding-bottom: 6rem;
  }

  .left-header .h-shape {
    display: none;
  }

  .right-header {
    grid-row: 1;
    padding-right: 0rem !important;
    width: 90%;
    margin: 0 auto;
  }
  .right-header .name {
    font-size: 2.5rem !important;
    text-align: center;
    padding-top: 3rem;
  }

  .header-content .left-header .image {
    margin: 0 auto;
    width: 90%;
  }
  

  .controls {
    top: auto;
    bottom: 0;
    flex-direction: row;
    justify-content: center;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    background-color: var(--color-grey-5);
  }
  .controls .control {
    margin: 1rem 0.3rem;
  }

  .about-container {
    grid-template-columns: repeat(1, 1fr);
  }
  .about-container .right-about {
    grid-template-columns: repeat(1, 1fr);
    padding-top: 2.5rem;
  }
  .about-container .left-about {
    padding-right: 0;
  }
  .about-container .left-about p {
    padding-left: 0;
  }

  .timeline {
    grid-template-columns: repeat(1, 1fr);
    padding-bottom: 6rem;
  }

  .container {
    padding: 2rem 2.5rem !important;
  }

  .about-stats .progress-bars {
    grid-template-columns: repeat(1, 1fr);
  }

  .portfolios {
    grid-template-columns: repeat(1, 1fr);
    padding-bottom: 6rem;
    margin-top: 1rem;
  }

  .blogs {
    grid-template-columns: repeat(1, 1fr);
    padding-bottom: 6rem;
  }

  .contact-content-con {
    flex-direction: column;
  }
  .contact-content-con .right-contact {
    margin-left: 0;
    margin-top: 2.5rem;
  }

  .contact-content-con .right-contact .i-c-2 {
    flex-direction: column;
  }

  .contact-content-con .right-contact .i-c-2 :last-child {
    margin-left: 0;
    margin-top: 1.5rem;
  }

  .contact-content-con .right-contact {
    margin-bottom: 6rem;
  }

  .contact-item {
    flex-direction: column;
    margin: 1rem 0;
  }
  .contact-item p {
    font-size: 15px;
    color: var(--color-grey-2);
  }
  .contact-item span {
    font-size: 15px;
  }
  .contact-item .icon {
    grid-template-columns: 25px 1fr;
  }

  .main-title h2 {
    font-size: 2rem;
  }
  .main-title h2 span {
    font-size: 2.3rem;
  }
  .main-title h2 .bg-text {
    font-size: 2.3rem;
  }
}
@media screen and (max-width: 1432px) {
  .container {
    padding: 7rem 11rem;
  }

  .contact-content-con {
    flex-direction: column;
  }
  .contact-content-con .right-contact {
    margin-left: 0;
    margin-top: 2.5rem;
  }

  .contact-content-con .right-contact .i-c-2 {
    flex-direction: column;
  }

  .contact-content-con .right-contact .i-c-2 :last-child {
    margin-left: 0;
    margin-top: 1.5rem;
  }

  .contact-content-con .right-contact {
    margin-bottom: 6rem;
  }

  .main-title h2 .bg-text {
    font-size: 5.5rem;
  }
}
@media screen and (max-width: 1250px) {
  .blogs {
    grid-template-columns: repeat(2, 1fr);
    margin-top: 6rem;
  }

  .portfolios {
    grid-template-columns: repeat(2, 1fr);
  }

  .header-content .right-header {
    padding-right: 9rem;
  }
}
@media screen and (max-width: 660px) {
  .blogs {
    grid-template-columns: repeat(1, 1fr);
  }

  .portfolios {
    grid-template-columns: repeat(1, 1fr);
  }
}
@media screen and (max-width: 1070px) {
  .about-container {
    grid-template-columns: repeat(1, 1fr);
  }
  .about-container .right-about {
    padding-top: 2.5rem;
  }

  .main-title h2 {
    font-size: 4rem;
  }
  .main-title h2 span {
    font-size: 4rem;
  }
  .main-title h2 .bg-text {
    font-size: 4.5rem;
  }
}
@media screen and (max-width: 970px) {
  .container {
    padding: 7rem 6rem;
  }

  .about-container .left-about {
    padding-right: 0rem;
  }

  .header-content {
    grid-template-columns: repeat(1, 1fr);
    padding-bottom: 6rem;
  }

  .left-header .h-shape {
    display: none;
  }
  .left-header .image {
    width: 90% !important;
    margin: 0 auto !important;
  }

  .right-header {
    grid-row: 1;
    padding-right: 0rem !important;
    width: 90%;
    margin: 0 auto;
  }
  .right-header .name {
    font-size: 2.5rem !important;
    text-align: center;
    padding-top: 3rem;
  }
}
@media screen and (max-width: 700px) {
  .container {
    padding: 7rem 3rem;
  }

  .about-stats .progress-bars {
    grid-template-columns: repeat(1, 1fr);
  }

  .about-container .right-about {
    grid-template-columns: repeat(1, 1fr);
  }

  .timeline {
    grid-template-columns: repeat(1, 1fr);
  }

  .main-title h2 {
    font-size: 3rem;
  }
  .main-title h2 span {
    font-size: 3rem;
  }
  .main-title h2 .bg-text {
    font-size: 4rem;
  }
}
.sub-btn {
  margin-top: 20px;
}

.sub-btn button {
  background-color: var(--color-primary);
  color: var(--color-white);
  border: none;
  padding: 10px 20px;
  border-radius: var(--br-sm-2);
  box-shadow: var(--box-shadow-1);
  cursor: pointer;
}

.sub-btn button:hover {
  background-color: var(--color-grey-6);
}


/*# sourceMappingURL=styles.css.map */

    </style>
</head>
<body class="main-content">
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/DSC_0056.jpg" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Hi, I'm <span>Zohaib Khan.</span>
                  Photographer, Photo/Video Editor, Graphic Designer
                </h1>
                <p>
                    I'm a Graphic Designer, I love to create/edit photos, videos, broushers, visiting cards, logos etc.
                </p>
                
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Information About me</h4>
                    <p>
                      I am Zohaib Khan from Islamabad having grip on adobe photoshop, coreldraw, Adobe illustrator, Adobe lightroom, filmora and adobe premium working on Upwork, Freelancer.com. ,<br> Help you in projects as per your requirements in limited span of time 
                    </p>
                    
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">50+</p>
                            <p class="small-text">Projects <br /> Completed</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">3+</p>
                            <p class="small-text">Years of <br /> experience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">300+</p>
                            <p class="small-text">Happy <br /> Clients</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">400+</p>
                            <p class="small-text">Customer <br /> reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">My Skills</h4>
                <div class="progress-bars">
                    
                    <div class="progress-bar">
                        <p class="prog-title">Video Editing</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Graphic Dsignining</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">PhotoShop</p>
                        <div class="progress-con">
                            <p class="prog-text">87%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Illustrator</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">My Timeline</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2021 - EX-2025</p>
                    <h5>ELECTRIAL ENGINEER<span> - UET TAXILA</span></h5>
                    <p>
                       4 year BSc Degree
                    </p>
                </div>
               
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Aug 2022 - Nov 2022</p>
                    <h5>GRAPHIC DESIGNING<span> - Enablers</span></h5>
                    <p>
                        Design in the absence of content is not design, it's decoration.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">June 2022 - Nov 2022</p>
                    <h5>PhotoShop<span> - Online Course</span></h5>
                    <p>
                        Beauty is in the eye of the photoshop editor.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Dec 2021 - March 2022</p>
                    <h5>Illustrator<span> - Online Course</span></h5>
                    <p>
                        
                    </p>
                </div>
                
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
            </div>
            <p class="port-text">
                Here is some of my work that I've done in my field .
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/InShot_20230730_204010978.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/InShot_20240326_132248325.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/InShot_20240330_102631348.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/AATISH REGISTERATION-01.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/INDEPENDENCE DAY FLYER png.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/ATTISH MAIN he-01.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/IMG_1460.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/IMG_1488.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/IMG_1531.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/9CB1D858-C7A4-4DDD-807E-D8D6310C20F8.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/IMG_0042.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/IMG_9723.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                           
                            <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact Info</h4>
                        <p>
                           You can contact me here or via 
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>
                                <p>
                                    : ISLAMABAD, Pakistan
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: zohaibkhanalizai786@gmail.com</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education</span>
                                </div>
                                <p>
                                    <span>: UET Taxila, Pakistan</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Mobile Number</span>
                                </div>
                                <p>
                                    <span>: 0313 5472647</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Languages</span>
                                </div>
                                <p>
                                    <span>: English, Urdu</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://www.facebook.com/profile.php?id=100045118601725&mibextid=ZbWKwL" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://x.com/ZohaibK30653942?s=09" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com/potriats_by_zohaib?igsh=eGp2em1laW91MGU1" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.tiktok.com/@zohaib.khan.0?_t=8lKKLrbLyFs&_r=1" target="_blank">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                                <a href="https://youtube.com/@zohaibkhan6678?si=AXzfF3TGLm0gBMRP" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form method="post" action="{{ route('send.email') }}" class="contact-form">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="input-control i-c-2">
                                <input type="text" name="name" required placeholder="YOUR NAME">
                                <input type="email" name="email" required placeholder="YOUR EMAIL">
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" required placeholder="ENTER SUBJECT">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" rows="8" placeholder="Message Here..."></textarea>
                            </div>
                            <div class="sub-btn"><button type="submit">Send Message</button></div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <!-- <script src="app.js"></script> -->
    <script>
        (function () {
    [...document.querySelectorAll(".control")].forEach(button => {
        button.addEventListener("click", function() {
            document.querySelector(".active-btn").classList.remove("active-btn");
            this.classList.add("active-btn");
            document.querySelector(".active").classList.remove("active");
            document.getElementById(button.dataset.id).classList.add("active");
        })
    });
    document.querySelector(".theme-btn").addEventListener("click", () => {
        document.body.classList.toggle("light-mode");
    })
})();

    </script>
</body>
</html>