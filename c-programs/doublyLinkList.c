#include <stdio.h>
#include <stdlib.h>
struct node
{
	int data;
	struct node *left;
	struct node *right;
};
struct node *head =NULL;
struct node* create(int);
void printforward(struct node*);
void printreverse(struct node*);
struct node* getEnd(struct node *start);
struct node* delete(struct node *start,int d);
int main(void)
{
	//printf("In function : main \n");
	//length of doubly link list
	int n;
	scanf("%d",&n);
	// create doubly link list
	struct node *start = create(n);
	//print doubly link list in forward order
	printforward(start);
	//get the end of doubly link list
	struct node *end = getEnd(start);
	//print doubly link list in reverse order
	printf("\n******************************************************\n");
	printreverse(end);
	// delete any node by element
	printf("\n******************************************************\n");
	printf("Do you want to deleted any element?\n");
	int d;
	scanf("%d",&d);
	struct node *deleted = delete(start,d);
	if(deleted == 0){}
	else
	{
		printf("element deleted! \n");
		struct node *end1 = getEnd(deleted);
		printforward(deleted);
		printf("\n******************************************************\n");
		printreverse(end1);
		printf("\n******************************************************\n");
		
	
	}
	return 0;
}
struct node* create(int n)
{
	//printf("In function : create \n");
	while(n>0)
	{
		//creating dynamic structure
	struct node *a = (struct node*)malloc(sizeof(struct node));
	struct node *p=head;

	if(head == NULL)
	{
		//printf("head == NULL \n");
		scanf("%d",&a->data);
		head =a;
		a->left = NULL;
		a->right =NULL;
	}
	else
	{
		//printf("head != NULL \n");
		while(p->right != NULL)
		{
			p=p->right;
		}
		scanf("%d",&a->data);
		a->right =NULL;
		a->left=p;
		p->right = a;
	}
	n--;
}
return head;
}

void printforward(struct node *start)
{
	//printf("In function : printforward \n");
	while(start)
	{
		printf("  %d  ",start->data);
		start=start->right;
	}
}
void printreverse(struct node *start)
{
	//printf("In function : printreverse \n");
	while(start)
	{
		printf("  %d  ",start->data);
		start=start->left;	
	}
}
struct node* getEnd(struct node *start)
{
	while(start->right != NULL)
	{
		start=start->right;
	}
	return start;
}
struct node* delete(struct node *start,int d)
{
	if(start == NULL)
	printf("List is empty \n");

	struct node *temp=start;
	struct node *check=start;

	while(check != NULL)
	{
		if(check->data == d)
			break;
		else
		check=check->right;
	}
	if(check==NULL)
	{
		printf("No such element found!\n");
		return 0;
	}
	else
	{
	while(temp->right->data != d)
	{
		temp = temp->right;
	}
	temp->right->right->left = temp;
	struct node *t = temp->right;
	temp->right = temp->right->right;
	free(t);
	return start;

}
}