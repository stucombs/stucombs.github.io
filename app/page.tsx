'use client'

import Image from 'next/image';
import styles from './page.module.css';
import { useEffect, useState } from 'react';

export default function Home() {
  const [theme, setTheme] = useState('');

  const toggleTheme = (newTheme: string): void => {
    setTheme(newTheme);
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
  };
  
  const switchMode = (): void => {
    if( theme === 'light' ){
      toggleTheme('dark');
    } else {
      toggleTheme('light');
    }
  };

  useEffect(() => {
    const getPreferredColorScheme = () => {
      if( window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ) {
        toggleTheme('dark');
      } else {
        toggleTheme('light');
      }

      window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
        if( event.matches ) {
          toggleTheme('dark');
        } else {
          toggleTheme('light');
        }
      });
    };

    getPreferredColorScheme();
  }, []);
  
  return (
      <div className={styles.page}>
        <header className={styles.header}>
            <div onClick={() => switchMode()}>
              { theme === 'light' ? (
                <Image src="/light.svg" alt="Toggle Mode" width={40} height={40} />
              ) : (
                <Image src="/moon.svg" alt="Toggle Mode" width={40} height={40} className="logo-dark" />
              )}
            </div>
        </header>
        <main className={styles.main}>
          <div className={`${styles.text} ${styles.heavy}`}>
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
        <footer className="footer">
          <div>Find me around the web</div>
          <div style={{ display: "flex" }}>
            <a href="https://github.com/stucombs" target="_blank" rel="noopener noreferrer">
              <Image src="./github.svg" alt="Github" width={50} height={50} className="logo" />
            </a>
            <a href="https://linkedin.com/in/combsstuart" target="_blank" rel="noopener noreferrer">
              <Image src="/linkedin.svg" alt="LinkedIn" width={50} height={50} className="logo" />
            </a>
          </div>
        </footer>
      </div>
  );
};
