import { Analytics } from '@vercel/analytics/next';
import type { Metadata } from 'next';
import { Chakra_Petch } from 'next/font/google';
import './globals.css';

const sans = Chakra_Petch({
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
          <Analytics />
      </body>
    </html>
  );
}
