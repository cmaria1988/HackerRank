class Node:
   def __init__(self, dataval=None):
      self.data = dataval
      self.next = None

class SLinkedList:
    def __init__(self):
        self.headval = None
    
    def listprint(self):
        printval = self
        while printval is not None:
            print (printval.data)
            printval = printval.next

list1 = SLinkedList()
list1 = Node(1)
e2 = Node(3)
e3 = Node(7)

# Link first Node to second node
list1.next = e2

# Link second Node to third node
e2.next = e3

#list1.listprint()

list2 = SLinkedList()
list2 = Node(1)
e4 = Node(2)

#Link first Node to second node
list2.next = e4

#list2.listprint()

def mergeLists(head1,head2):
    newarray = []
    head1val = head1
    head2val = head2
    
    while head1val is not None:
        newarray.append(head1val.data)
        head1val = head1val.next
    
    while head2val is not None:
        newarray.append(head2val.data)
        head2val = head2val.next
    
    newarray = sorted(newarray)
    newllist = SLinkedList()
    newllist = Node(newarray[0])
    
    for i in range(1, len(newarray)):
        n = Node(newarray[i])
        temp = newllist
        while(temp.next):
            temp = temp.next
        temp.next = n
            
    return newllist

print(mergeLists(list1,list2))