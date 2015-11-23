/*
 * =====================================================================================
 *
 *       Filename:  inetntoa.cpp
 *
 *    Description:  test for the function inet_ntoa
 *
 *        Version:  1.0
 *        Created:  2015年11月16日 16时55分13秒
 *       Revision:  none
 *       Compiler:  g++
 *
 *         Author:  YOUR NAME (gzx), 
 *   Organization:  
 *
 * =====================================================================================
 */
#include <iostream>
#include <bitset>
#include <arpa/inet.h>
using namespace std;
int main()
{
	in_addr myaddr;
	myaddr.s_addr=inet_addr("1.2.3.4");
	cout<<bitset<sizeof(int)*8>(myaddr.s_addr)<<endl;
	char *szValue1 = inet_ntoa(myaddr);
	cout<<szValue1<<endl;
	int a;
	cin>>a;
	return 0;
}

