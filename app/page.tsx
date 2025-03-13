// import Image from "next/image";
import styles from "./page.module.css";

export default function Home() {
  return (
    <div className={styles.page}>
      <main className={styles.main}>
        <div className={styles.text}>
          Hello.
			  </div>
        <div className={styles.text}>
          My name is Stu Combs.
			  </div>
				<div className={styles.text}>
          I am a full stack web developer from Chicago. Most of my past and current work is in Linux, MySQL and PHP environments with React and Angular frontends and experience in Amazon Web Services.
				</div>
				<div className={styles.text}>
          Raised in Indiana, I graduated with an Informatics Degree from the School of Informatics and Computing at Indiana University Bloomington. Outside of developing, I enjoy videogames, spending my time at the gym or trying a new beer.
				</div>
      </main>
      <footer className={styles.footer}>
        <span>Find me around the web</span>
      </footer>
    </div>
  );
};
