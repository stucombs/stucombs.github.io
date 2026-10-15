import { Analytics } from '@vercel/analytics/next';
import type { Metadata } from 'next';
import { Chakra_Petch } from 'next/font/google';
import './globals.scss';

const sans = Chakra_Petch({
  weight: '400',
  subsets: ['latin'],
  variable: '--font-sans'
});

export const metadata: Metadata = {
  title: "Stu Combs' Page",
  description: "A portfolio website",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en" data-theme="dark">
      <body className={sans.variable}>
          {children}
          <Analytics />
      </body>
    </html>
  );
}
