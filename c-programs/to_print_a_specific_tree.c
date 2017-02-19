#include <stdio.h>
#include <stdlib.h>
struct node
{
	int data;
	struct node *left;
	struct node *right;
};
struct node *head=NULL;
struct node* createNode(int value);
void print(struct node *head);
int main(void)
{	int n;
	scanf("%d",&n);
	while(n>0)
	{
	int value;
	scanf("%d",&value);
	if(head==NULL)
	{
	struct node *address =createNode(value);
	head=address;
	}
	else
	{
		struct node *p=head;
		if(value < p->data)
		{
			struct node *address1 =createNode(value);
			p->left = address1;
		}
		else
		{
			struct node *address2 =createNode(value);
			p->right = address2;
		}
	}
	n--;
	}
	print(head);
return 0;
}

struct node* createNode(int value)
{
	struct node *a = (struct node*)malloc(sizeof(struct node));
	a->left=NULL;
	a->right=NULL;
	a->data=value;
	return a;
}
void print(struct node *head)
{
	
	if(head)
	{
		print(head->left);
		printf("%d",head->data);
		print(head->right);
	}
	return;
}
/*
To print tree like 
		
			2
		   / \	
		  1   3

*/