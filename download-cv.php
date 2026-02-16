<?php
$cvText = <<<TXT
Farrukh Ahmed Khan
Full Stack Developer

Mobile: +92 348 1339849
Email: khanfarrukh200@gmail.com
GitHub: https://github.com/farrukh-ahmed-khan
LinkedIn: https://www.linkedin.com/in/farrukh-ahmed-khan/
Portfolio: https://farrukh-ahmed-khan.vercel.app/

Summary
Skilled and motivated Full Stack Developer with experience in React.js, Node.js, TypeScript, REST APIs, MongoDB, MySQL, and React Native.

Technical Skills
- React.js, Next.js, Redux, Bootstrap, MUI, NestJS, Ant Design, ShadCN, Tailwind CSS
- JavaScript, TypeScript, PHP, Python, C#, HTML, CSS, SCSS
- Node.js, Express.js, REST APIs, API Integrations
- MongoDB, MySQL, Firebase
- AWS, Git/GitHub

Experience
- Senior Full Stack Engineer, SOFTNOX TECHNOLOGIES (June 2025 - Present)
- Senior Frontend Developer, SOFTNOX TECHNOLOGIES (June 2023 - June 2025)
- Full Stack Engineer, AxeCorp Technologies (March 2022 - June 2023)
- Frontend Developer, TexvnX (March 2021 - February 2022)

TXT;

header('Content-Type: text/plain; charset=UTF-8');
header('Content-Disposition: attachment; filename=\"Farrukh_Ahmed_Khan_CV.txt\"');
echo $cvText;
