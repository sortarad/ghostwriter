## How to install?
Install via the Control Panel or via composer

```bash
composer require sortarad/ghostwriter
```

To load the necessary javascript files you'll need to add this `{{ ghostwriter:assets }}` to your footer.

## How to use?
Getting your text moving is simple. Just place the `{{ ghostwriter loop="false" speed="40"}}` tag in the element you want to get moving. 

Example:`<a {{ ghostwriter loop="true" speed="200"}} href="https://statamic.com">Powered by Statamic</a>`

### What options?
There are two options that you can control. 

- **Speed:** This is the typing speed (in milliseconds). Example: `speed="40"`
- **Looping:** Do you want the text to loop? Example: `loop="false"`
