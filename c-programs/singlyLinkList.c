#include <stdio.h>
#include <stdlib.h>
//prototype
	struct node
	{
		int data;
		struct node *next;
	};
	struct node *head=NULL;
	struct node* createLinkList(int n);
	void printLinkList(struct node *start);

int main(void)
{
	//printf("In function main \n");
	
	int n; //length of link list
	scanf("%d",&n);
	//create singly link list
	struct node *start =createLinkList(n);
	//print Link list
	printLinkList(start);

	return 0;
}
struct node* createLinkList(int n)
{
	//printf("In function createLinkList \n");
	while(n>0)
	{
		struct node *a = (struct node*)malloc(sizeof(struct node));
		struct node *p=head;

		if(head == NULL)
		{
		//printf("head is == NULL \n");
		head = a;
		scanf("%d",&a->data);
		a->next = NULL;
		}
		else
		{
			//printf("head is != NULL \n");
		while(p->next != NULL)
		{
			p= p->next;
		}
		scanf("%d",&a->data);
		p->next=a;
		a->next = NULL;
		}
		n--;

	}
return head;
}
void printLinkList(struct node *start)
{
	//printf("In function printLinkList \n");
	while(start)
	{
		printf("  %d  ",start->data);
		start = start->next;
	}
	printf("\n");
}