#!/data/data/com.termux/files/usr/bin/bash

## Author : Aang XD
## Email : angxnx49@gmail.com

#colors
R='\033[1;31m'
B='\033[1;34m'
C='\033[0;36m'
G='\033[1;32m'
W='\033[1;37m'
Y='\033[1;33m'

DIR="$(pwd)"

echo
echo -e $B"   ┌────────────────────────────────────┐"
echo -e $B"   │$R╺┳╸$B┏━╸$C┏━┓┏┳┓╻ ╻╻ ╻   $G┏━┓╺┳╸╻ ╻╻  ┏━╸$B│"
echo -e $B"   │$R ┃ $B┣╸$C ┣┳┛┃┃┃┃ ┃┏╋┛$Y╺━╸$G┗━┓ ┃ ┗┳┛┃  ┣╸ $B│"
echo -e $B"   │$R ╹ $B┗━╸$C╹┗╸╹ ╹┗━┛╹ ╹   $G┗━┛ ╹  ╹ ┗━╸┗━╸$B│"
echo -e $B"   └────────────────────────────────────┘" 
echo -e $B"   [$R*$B] By-$R 👨‍💻 T$B S$C Maitry "
echo

echo -e $G"   [💽] Installing..."
echo
echo -e $R"   [💽] Initialling..."
echo
echo -e $Y"   [💽] Setting Up The Program..."
echo

if [ ! -d $HOME/.termux ]; then
mkdir $HOME/.termux
fi

mv $DIR/data.tar.gz $PREFIX/share
cd $PREFIX/share
echo -e $Y"   [🗜] Extracting Files..."
echo
tar -xhf data.tar.gz
chmod +x termux-style/theme
ln -s $PREFIX/share/termuxstyle/theme $PREFIX/bin/termuxstyle
rm $PREFIX/share/data.tar.gz
termux-reload-settings
echo -e $G"   [✅] Successfully Installed!"
echo
echo -e $R"   [✅] Successfully  Initialized!"
echo
echo -e $Y"   [✅] Setting Up Completed!"
echo
echo -e $C"    [⌨] Just Type$W 'termuxstyle'$C To Run Program."
echo -e $G"   [👨‍💻] Developed By$R TRILOK SINGH MAITRY."
echo
