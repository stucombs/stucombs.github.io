import type { Metadata } from 'next';
import { Source_Sans_3 } from 'next/font/google';
import './globals.css';

const sourceSan3 = Source_Sans_3({
  subsets: ['latin'],
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
    <html lang="en" suppressHydrationWarning>
      <body className={sourceSan3.className}>
          {children}
      </body>
    </html>
  );
}
