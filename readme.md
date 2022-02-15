# InclusiveHealth Development 
## This Readme is just a reference point on the file directory and resources on Github and additional coding resources. Please feel free to add to the readme if the directory is updated and/or additional resoures and guides. 

## Table of Contents 

- [File Directory](#file-directory)
- [Resources](#resources-on-github)
  
  

## File Directory 
The Directory is set up as follows:

### Assets 
**---Place Images, Fonts, and CSS in their respective folder. Additional assets files  can be place in the parent assets folder---**
- Images  
- Fonts 
- CSS 

### JavaScript 
**---Place .js files here---** 
### HTML 
**---All .html files should be placed in parent folders---** 
- Home
- About 
- Article 
- Ask Me

## Resources on Github 

### Primary Resource: [Github Docs](https://docs.github.com/en)
This resource will be primarily used to reference how to use GitHub version control. It explains the features we will be mainly using: forking, pull requests, and creating branches. 

### [Github Desktop](https://desktop.github.com/)
>Recommended to use to fork the repository, creating branches future pull requests   
>Can connect to preferred editor

### [Forking](https://docs.github.com/en/get-started/quickstart/fork-a-repo)
>Use this function to place the repo onto your local computer. Pull Request will be used to commit to the main branch. 

### [Pull Requests](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/working-with-forks/about-forks)



# Edit Github Code and View Live 
```For the InclusiveHealth code, it’s recommended to edit the code on a local server to view and confirm the work/changes that has been done. Below is a guide on cloning the Github code to your local machine, editing the code, viewing the code live, and committing and pushing the changes back to the repository.```

## Software Required 
1. Github Desktop 
2. Code Editor: Recommended → Visual Studio Code 
3. VSC Extension: Live Server

## Using Github Desktop 
```Using Github Desktop will allow you to clone the repository onto your local machine and edit the code using your preferred code editor.```

1. Download [Github Desktop](https://desktop.github.com/)
2. Install the application according to the instruction for your machine 
3. Sign In using your Github Account 
   - Preferences → Accounts → Sign In 
4. Set Preferred Code Editor 
   - Preferences → Integrations → Select External Editor 
5. Clone and Fork Repositories 
   - In this case, we want to clone so that changes made on the local repository get push to the original repository  
   - File → Clone Repository → URL and type in the Github URL of the repository 
   - Select the Local Path for the Local Repository to reside
   - Click Clone 
   - OR 
   - If you are viewing the GitHub repository via your browser, select code and in the drop-down, click open with Github Desktop. 
    - You will still be asked to select the local path.

## Edit Local Repository 
```You can access the files via going to the local directory itself, opening the folder in your preferred code editor, or using Github Desktop to open your editor directly. ```

### Access the local repository via File Manager 
1. Go to the local path you place the repository in. 
2. Right-Click on the file you want to edit and select the application you want to use the edit the file.

### Access the repository via Visual Studio Code 
1. Open Visual Studio Code 
2. In the Get Started Tap, Click Open or Click File and Select Open Folder 
3. In the prompt, select the local repository folder. Visual Studio Code will display all the files that reside in the local repository.

### Access the repository from Github Desktop
1. Click Current Repository and your local repositories will be listed below. 
2. Right-Click the desired repository and click open in Visual Studio Code (or your preferred editor) 
3. Github Desktop will proceed to open the repository in the code Editor

## View Live Version of Code
``` Before we commit and push the code back the original code, we want to confirm the changes we made. We can do this by using a local server to view the live code. ```
1. On the Left Sidebar in Visual Studio Code, Select Extensions (The icon that looks like building blocks) OR Click View and Click Extensions
2. Extensions will show your installed extensions and recommended ones.  
3. In the search bar, type “Live Server” 
4. Select Live Server by the author “Ritwick Dey” 
5. Click Install. 
6. In the status bar of your editor, will be “Go Live” Button that allows you to view the code live. 
7. Select a html (or php) in the editor and click “Go Live”. 
   - Your default browser will open and display the live code. 
   - Make sure to see the changes to save the file and it’s supporting files (i.e stylesheet)

## Commit and Push Changes 
``` As you make and save changes done to the code, Github Desktop will update with those changes, in the changes tab (next to the history tab). ```
- To commit those changes to the main branch,
    - Github Desktop will display the changed files and you will need to add a summary (required) and a description (optional) before committing
     - You can also select/deselect the files you want to commit
    - Once a summary is given, click commit to main
    - After the commit is done, click fetch origin so the commit and it changes is pushed to the original repository.


