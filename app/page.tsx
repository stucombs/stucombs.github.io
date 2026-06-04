import Image from 'next/image';

export default function Home() {  
  return (
    <>
      <main className="container">
        <p className="bold">Hello.</p>
        <p>My name is Stu Combs.</p>
        <p>
          I am a full stack web developer from Chicago. Most of my past and current work is in PHP, Javascript, MySQL and Linux environments with React and Angular frontends and experience in Amazon Web Services.
        </p>
        <p>
          Raised in Indiana, I graduated with an Informatics Degree from the School of Informatics and Computing at Indiana University Bloomington. Outside of developing, I enjoy videogames, spending my time at the gym or trying a new beer.
        </p>
      </main>
      <footer className="page-footer">
        <div>Find me around the web</div>
        <div>
          <a href="https://github.com/stucombs" target="_blank" rel="noopener noreferrer">
            <Image src="./github.svg" alt="Github" width={50} height={50} className="logo" />
          </a>
          <a href="https://linkedin.com/in/combsstuart" target="_blank" rel="noopener noreferrer">
            <Image src="/linkedin.svg" alt="LinkedIn" width={50} height={50} className="logo" />
          </a>
        </div>
      </footer>
    </>
  );
};
