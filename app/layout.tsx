import type { Metadata } from 'next';
import { Noto_Sans } from 'next/font/google';
import './globals.css';

const sans = Noto_Sans({
  weight: '400',
  subsets: ['latin'],
  variable: '--font-sans'
});

export const metadata: Metadata = {
  title: "Stu Combs' Website",
  description: "A personal website project created with NextJS",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body className={sans.variable}>
          {children}
      </body>
    </html>
  );
}
