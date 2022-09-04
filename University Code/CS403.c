// Bc200200491
// Omer Abdul Rehman
#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/wait.h>
int main()
{
    int i = 3;
    int pid = -1;
    int pipes[2];
    int returnst;
    int status;
    char writemess[2][20] = {"BC200200491", "BSSE"};
    char readmess[20];
    returnst = pipe(pipes);
    if (returnst < 0)
    {
        printf("Unable to create pipe\n");
        return 1;
    }
    pid = fork();
    if (pid < 0)
    {
        printf("fork failed\n");
        return 1;
    }
    if (pid == 0)
    {
        printf("\nIn Child Process\n");
        printf("Reading data from pipe in child process\n");
        read(pipes[0], readmess, sizeof(readmess));
        printf("%s = ", readmess);
        read(pipes[0], readmess, sizeof(readmess));
        printf("%s \n", readmess);
    }
    else
    {
        printf("\nIn Parent Process\n");
        printf("\nWrite the data through Pipe in Parent Process\n");
        write(pipes[1], writemess[0], sizeof(writemess[0]));
        write(pipes[1], writemess[1], sizeof(writemess[1]));
        wait(&status);
        exit(0);
    }
}